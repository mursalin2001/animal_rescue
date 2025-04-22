<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\volunteer;

class InfoPageController extends Controller
{
    public function virtualAssistant()
    {
        return view('pages.virtualAssistant');
    }

    public function volunteer()
    {
        return view('pages.volunteer');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);

        volunteer::create($request->all());

        return redirect()->back()->with('success', 'Application submitted successfully!');
    }

    public function careTips()
    {
        return view('pages.careTips');
    }
}
