<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ContactRequest;
use App\Http\Controllers\Controller;
use App\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::all();
        return view('contact.index', ['contact' => $contact]);
    }
    
    public function edit(Contact $contact)
    {
        $contact = Contact::find(1);
        return view('contact.edit', ['contact' => $contact]);
    }
    
    public function update(ContactRequest $request, Contact $contact)
    {
        $contact = Contact::find(1);
        $data = $request -> all();
        $contact -> fill($data);
        $contact -> save();
        return redirect() -> action('ContactController@index');
    }
}
