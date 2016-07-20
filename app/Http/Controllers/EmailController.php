<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;

class EmailController extends Controller
{
    public function store(ContactFormRequest $request) 
    {
        $data = [
            'name' => $request->get('name'),
            'code_postal' => $request->get('code_postal'),
            'email' => $request->get('email'),
            'telephone' => $request->get('telephone'),
            'comment' => $request->get('comment')
        ];
        Mail::send('email.contact', ['data' => $data], function ($message) use ($data){
            $message->from($data['email']);
            $message->to('info@aupaysdesgeant.com', 'ADMIN')->subject('AUPAYSDESGEANTS Feedback');
            dd($message);
        });
        
        return redirect()->action('AccueilController@index');
    }
    
}
