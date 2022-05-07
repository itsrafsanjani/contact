<?php

namespace ItsRafsanJani\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use ItsRafsanJani\Contact\Models\Contact;
use ItsRafsanJani\Contact\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use ItsRafsanJani\Contact\Mail\ContactMailable;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('contact::contact_form');
    }

    public function send(ContactRequest $request)
    {
        $message['name'] = $request->name;
        $message['phone'] = $request->phone;
        $message['email'] = $request->email;
        $message['message'] = $request->message;

        Contact::create($message);

        Mail::to(config('contact.mail_contact_to'))->send(new ContactMailable($message));

        return back()->withSuccess('Message Sent!');
    }
}
