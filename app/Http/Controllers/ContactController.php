<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use MercurySeries\Flashy\Flashy;


class ContactController extends Controller
{
    public function create(){
        return view('contacts.create');
    }
    public function store(ContactRequest $request){
        $message=new Message();
        $message->name=$request->name;
        $message->email=$request->email;
        $message->contenu=$request->contenu;
        $message->save();
        //$message= Message::create($request->only('name','email','contenu'))  *** avec fialeble de model




        //$mailble=new ContactMail($request->name,$request->email,$request->msg);
        $mailble=new ContactMail($message);

        Mail::to(config('laracastemail.var_mail'))->send($mailble);
        //Flashy::success('Message', 'http://your-awesome-link.com');
        flashy()->success('Votre message est envoyé avec succes.');

        return redirect(route('home'));
        /*
        **changer dans ContactRequest**
        $this->validate($request,
          [   'name'=>'required|min:3',
              'email'=>'required|email',
              'message'=>'required|min:5'
          ]);
        */
    }
}
