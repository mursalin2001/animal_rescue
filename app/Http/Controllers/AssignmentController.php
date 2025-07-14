<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use App\Models\Post;
use App\Models\users;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function index()
{

    $upazilas = [Auth::user()->address];

    $posts = Post::whereIn('upazila', $upazilas)->with('user')->get();

    
    return view('admin.assignments', ['assignments' => $posts]);
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