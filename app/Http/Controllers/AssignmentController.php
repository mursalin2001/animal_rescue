<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function index()
    {
        return view('admin.assignments'); // View will be created in next step
    }
}
