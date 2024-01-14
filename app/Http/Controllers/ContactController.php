<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use App\Mail\ContactMessageSent;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fname' => 'required|string|max:255',
            'contact_num' => 'nullable|string|digits:10',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:225',
        ],
        [
            'contact_num.max' => 'Mobile Number should be of max 10 digits.',
            'message.max' => 'Message should be less than 200 characters.',
        ]);
        $message = ContactMessage::create([
            'fname' => $request->input('fname'),
            'contact_num' => $request->input('contact_num'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
        ]);
        

        // Send email
        Mail::to('flick@kaizeltech.onmicrosoft.com')->send(new ContactMessageSent($message));

        return redirect()->back()->with('success', 'Message submitted successfully!');
    }
}
