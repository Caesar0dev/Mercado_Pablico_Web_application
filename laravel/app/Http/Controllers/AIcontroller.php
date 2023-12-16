<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class AIcontroller extends Controller
{
    //

    public function AIpost(Request $request)
    {
        $client = new Client();
        // dd($request->instructions);
        $response = $client->post('https://api.openai.com/v1/chat/completions', [
            'headers' => [
                'Authorization' => 'Bearer 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',
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    ['role' => 'system', 'content' => $request->instructions],
                    ['role' => 'user', 'content' => $request->title],
                    ['role' => 'user', 'content' => $request->details],
                ],
            ],
        ]);

        $data = json_decode($response->getBody(), true);
        $bidpattern = $data['choices'][0]['message']['content'];
        return response()->json(['linkedinPost' => $data['choices'][0]['message']['content']]);
        // return view('project', $bidpattern);
        // return view('project', ['bidpattern' => $bidpattern]);
        // return view('project', compact('bidpattern'));
    }
}
