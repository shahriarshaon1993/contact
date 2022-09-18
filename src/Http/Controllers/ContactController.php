<?php

namespace Pearl\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Pearl\Contact\Mail\ContactMail;
use Pearl\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        Mail::to(config('contact.send_email_to'))
            ->send(new ContactMail($request->message, $request->name));

        $contact = new Contact();

        $contact->email = $request->email;
        $contact->name = $request->name;
        $contact->message = $request->message;
        $contact->save();

        return back();
    }
}