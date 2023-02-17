<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Session;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->number = $request->number;
        $contact->content = $request->content;
        $contact->save();
        return redirect('contact')->with('success','Message Sent Successfully');
    }

    public function messages(){
        if(Session::has('user')){
            $messages= Contact::all();
            return view('admin.messages',compact('messages'));
        }
        else{
            return redirect('account/form/login');
        }
    }

    public function message_form(){
        if(Session::has('user')){
            return view('admin.message-form');
        }
        else{
            return redirect('account/form/login');
        }
    }

    public function destroy($id){
        if(Session::has('user')){
            $message = Contact::find($id);
            $message->delete();
            return redirect('account/messages')->with('status','Message Deleted Successfully');
        }
        else{
            return redirect('account/form/login');
        }
    }
}
