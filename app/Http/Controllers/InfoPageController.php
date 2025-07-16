<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\volunteer;
use App\Models\Post;
use Exception;

class InfoPageController extends Controller
{
    public function virtualAssistant()
    {
        return view('pages.virtualAssistant');
    }

    public function reply(Request $request)
    {
        $message = $request->input('message');

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
        ])->post('https://api.openai.com/v1/chat/completions', [
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'system', 'content' => 'You are an expert in animal rescue. Give helpful, safe, and practical advice.'],
                ['role' => 'user', 'content' => $message]
            ],
            'max_tokens' => 150,
        ]);

        return response()->json([
            'reply' => $response['choices'][0]['message']['content']
        ]);
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

    public function ongoing()
    {
        return view('pages.ongoing');
    }

    public function complete()
    {
        return view('pages.complete');
    }

    public function show($id)
    {
        $animal = Post::findOrFail($id);
        return view('pages.animal_profile', compact('animal'));
    }
}
