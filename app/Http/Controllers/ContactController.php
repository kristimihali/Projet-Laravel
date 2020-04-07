<?php
namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    function save(ContactRequest $request)
    {
        $contact = new Contact;
        $contact->setAttribute('contact_name', $request->name);
        $contact->setAttribute('contact_email', $request->email);
        $contact->setAttribute('contact_message', $request->message);
        $contact->save();

        return redirect()->back()->withErrors(['Contact saved successfully.']);;
    }
}
