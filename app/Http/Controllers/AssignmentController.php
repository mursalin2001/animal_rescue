<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;



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

}