<?php
namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function store(ContactRequest $request)
    {
        //gets handled by contactRequest 
    }

    public function show(ContactRequest $request)
    {
        print_r($request);
    }
    public function index()
    {
        return view('contact');
    }

    function save(ContactRequest $request)
    {
        try {

            $contact = new Contact;
            $contact->setAttribute('contact_name', $request->name);
            $contact->setAttribute('contact_email', $request->email);
            $contact->setAttribute('contact_message', $request->message);
            $contact->save();

        } catch(\Exception $e) {
        }

        return redirect()->back()->withErrors(['Contact saved successfully.']);;
    }
}
