
public function __invoke(Request $request): JsonResponse
    {
        Message::create([
            'content' => $request->input('userMessage'),
            'sender' => 'user'
        ]);
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . env('OPEN_AI_API_KEY')
        ])
            ->post('https://api.openai.com/v1/chat/completions', [
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    [
                        'role' => 'user',
                        'content' => $request->input('userMessage')
                    ]
                ],
                'temperature' => 0,
                'max_tokens' => 2048
            ])->body();
        Message::create([
            'content' => json_decode($response)->choices[0]->message->content,
            'sender' => 'ChatGPT'
        ]);

        return response()->json([
            'message' => json_decode($response)->choices[0]->message->content,
        ]);
    }
