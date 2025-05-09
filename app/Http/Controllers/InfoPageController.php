<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\volunteer;
use Exception;

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
            'phone' => ['required', 'regex:/^(01)[0-9]{9}$/'],
            'address' => 'required|string|max:255',
        ]);

        try {
            volunteer::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'availability' => $request->availability,
                'skills' => $request->skills,
            ]);

            return redirect()->back()->with('success', 'Application submitted successfully!');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['submission' => 'Something went wrong. Please try again later.']);
        }
    }

    public function careTips()
    {
        return view('pages.careTips');
    }
}
