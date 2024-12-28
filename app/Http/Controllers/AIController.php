<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AIController extends Controller
{
    public function responseV1(Request $request)
    {
        $message = $request->message ? 'Hello, World! You said: ' . $request->message : 'Send me a message';
        $response = [
            'sender' => [
                'id' => 'ai',
                'name' => 'Chat Bot',
                'imageUrl' => 'https://via.placeholder.com/150',
            ],
            'message' => $message,
        ];
        return $response;
    }
}
