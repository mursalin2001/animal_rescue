<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatbotController extends Controller
{
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
}



