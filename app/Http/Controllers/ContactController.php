<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function show()
    {
        return view('pages.contact');
    }

    public function send(Request $request)
    {

        /*$validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'email'     => 'required|email',
            'phone'     => 'required|string|max:15',
            'subject'   => 'required|string|max:255',
            'message'   => 'required|string',
        ]);*/
        $data = [
            'full_name' => $request->full_name,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'subject'   => $request->subject,
            'message'   => $request->message
        ];

        Mail::to(config('mail.admin_address'))->send(new ContactMail($data));
        return redirect()->to(url()->previous() . '#contact')->with('success', 'Your message has been sent successfully!');
    }
}
