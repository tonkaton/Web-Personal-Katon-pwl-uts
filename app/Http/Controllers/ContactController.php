<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function index() 
    {   
       return view("contact");
    }
   public function SendEmail(Request $request)
   {
    $details = [
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'message' => $request->message
    ];
    Mail::to('katonkurnia28@gmail.com')->send(new ContactMail($details));
    return back()->with('message_send','Your Messege has been Sucessfully!');
   }
}
