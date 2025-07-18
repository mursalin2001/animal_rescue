<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use App\Models\Post;
use App\Models\volunteer;
use Illuminate\Http\Request;
use App\Models\User;
class AssignmentController extends Controller
{
   public function index()
{
    $authAddress = Auth::user()->address;

    // Get all volunteers whose address matches the auth user's address
    $matchedVolunteers = Volunteer::where('address', $authAddress)->get();

    // Extract their user IDs
    $matchedUserIds = $matchedVolunteers->pluck('user_id');

    // Get the user data for those IDs
    $matchedUsers = User::whereIn('id', $matchedUserIds)->get();

    // Get posts for the same upazila
    $posts = Post::where('upazila', $authAddress)->with('user')->get();

    return view('admin.assignments', [
        'assignments' => $posts,
        'user_data' => $matchedUsers,
        'volunteers' => $matchedVolunteers,
    ]);
}


 public function updateStatus(Request $request, $id)
{
    $request->validate([
        'status' => 'required|in:Pending,Ongoing,Complete',
    ]);

    $post = Post::findOrFail($id);
    $post->status = $request->input('status');
    $post->save();

    Session::flash('success', 'Post status updated successfully.');
    return Redirect::back();
}

public function updateAdoption(Request $request, $id)
{
    $request->validate([
        'adoption' => 'required|in:Fit,Not Fit',
    ]);

    $post = Post::findOrFail($id);
    $post->adoption = $request->input('adoption');
    $post->save();

    Session::flash('success', 'Post adoption status updated successfully.');
    return Redirect::back();
}
}