<?php

namespace TEST\ContactForm\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use TEST\ContactForm\Models\TestContact;


class ContactFormController extends Controller
{
    public function index()
    {
        return view('contactform::contactform');
    }
    public function store(Request $request)
    {
       $contact = new TestContact();
       $contact->name = $request->name;
       $contact->phone = $request->phone;
       $contact->email = $request->email;
       $contact->message = $request->message;
       if($contact->save()){
        return redirect()->route('contact.index');
       }
    }
}
