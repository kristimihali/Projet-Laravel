<?php
namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Http\Controllers\Controller;
use App\Contact;

class ContactController extends Controller
{
    public function store(ContactRequest $request){
        //gets handled by contactRequest 
        
    }

    public function show(ContactRequest $request){
        print_r($request);
    }
    public function index()
    {
        return view('contact');
    }
    function save(ContactRequest $request){
        //Contact::
        //print_r($request->input());
        $contact = new Contact;
        $contact->contact_name = $request->name;
        $contact->contact_email = $request->email;
        $contact->contact_message = $request->message;
        $contact->contact_date = now();
        $contact->save();
        //echo "submit successful";
        return redirect()->back()->withErrors(['Contact saved successfully.']);;
        
    }
}
