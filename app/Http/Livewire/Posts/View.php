<?php

namespace App\Http\Livewire\Posts;

use App\Models\Comment;
use App\Models\Like;
use App\Models\Post;
use Auth;
use Exception;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class View extends Component
{
    use WithPagination;

    public $comments = [];
    public $comment;
    public $type;
    public $queryType;
    public $status;
    public $postId;
    public $deletePostId;
    public $isOpenCommentModal = false;
    public $isOpenDeletePostModal = false;

    protected $queryString = ['status'];

    public function mount($type = null, $status = null)
    {
        $this->queryType = $type;
        $this->status = $status;
    }

    public function render()
    {
        $posts = $this->setQuery();
        return view('livewire.posts.view', ['posts' => $posts]);
    }

    public function incrementLike(Post $post)
    {
        $like = Like::where('user_id', Auth::id())
            ->where('post_id', $post->id);

        if (! $like->count()) {
            Like::create([
                'post_id' => $post->id,
                'user_id' => Auth::id(),
            ]);
            return true;
        }
        $like->delete();
    }

    public function comments($post)
    {
        $post = Post::with(['comments.user' => function ($query) {
            $query->select('id', 'name');
        }])->find($post);

        $this->postId = $post->id;
        $this->resetValidation('comment');
        $this->isOpenCommentModal = true;
        $this->setComments($post);
        return true;
    }

    public function createComment(Post $post)
    {
        $validatedData = Validator::make(
            ['comment' => $this->comment],
            ['comment' => 'required|max:5000']
        )->validate();

        Comment::create([
            'user_id' => Auth::id(),
            'post_id' => $post->id,
            'comment' => $validatedData['comment'],
        ]);

        session()->flash('comment.success', 'Comment created successfully');
        $this->setComments($post);
        $this->comment = '';
        return redirect()->back();
    }

    public function setComments($post)
    {
        $this->comments = $post->comments;
        return true;
    }

    public function showDeletePostModal(Post $post)
    {
        $this->deletePostId = $post->id;
        $this->isOpenDeletePostModal = true;
    }

    public function deletePost(Post $post)
    {
        $response = Gate::inspect('delete', $post);

        if ($response->allowed()) {
            try {
                $post->delete();
                session()->flash('success', 'Post deleted successfully');
            } catch (Exception $e) {
                session()->flash('error', 'Cannot delete post');
            }
        } else {
            session()->flash('error', $response->message());
        }
        $this->isOpenDeletePostModal = false;
        return redirect()->back();
    }

    public function deleteComment(Post $post, Comment $comment)
    {
        $response = Gate::inspect('delete', [$comment, $post]);

        if ($response->allowed()) {
            $comment->delete();
            $this->isOpenCommentModal = false;
            session()->flash('success', 'Comment deleted successfully');
        } else {
            session()->flash('comment.error', $response->message());
        }

        return redirect()->back();
    }

    private function setQuery()
    {
        $query = Post::withCount(['likes', 'comments'])
            ->with(['userLikes', 'postImages', 'user' => function ($q) {
                $q->select(['id', 'name', 'username', 'profile_photo_path']);
            }]);

        if ($this->queryType === 'me') {
            $query->where('user_id', Auth::id());
        } elseif ($this->queryType === 'followers') {
            $userIds = Auth::user()->followings()->pluck('follower_id')->toArray();
            $userIds[] = Auth::id();
            $query->whereIn('user_id', $userIds);
        }

        if (!empty($this->status)) {
            $query->where('status', $this->status);
        }

        return $query->latest()->paginate(10);
    }
}
