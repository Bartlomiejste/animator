<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Message;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'message' => 'required|string|min:5',
        ]);
        
        Message::create($validated);

        Mail::raw("Wiadomość od: {$validated['name']} ({$validated['email']})\n\n{$validated['message']}", function ($message) {
            $message->to('mstepbyfun@gmail.com')
                    ->subject('Nowa wiadomość z mojej strony');
        });

        return back()->with('success', 'Wiadomość została wysłana!');
    }
}