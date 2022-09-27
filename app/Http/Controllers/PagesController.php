<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\MailingList;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PagesController extends Controller
{

    public function homePage(){
        //show Home page

        return view('pages.home');
    }

    public function contactPage(){
        //show Contact page

        return view('pages.contact');
    }


    public function aboutPage(){
        //show About page

        return view('pages.about');
    }
    public function storeEmails(Request $request){
        //store Mailing list
        $request->validate([
            'email' => 'required'
        ]);

        $mailinglist = MailingList::create([
            'email' => $request->input('email'),
        ]);

        return redirect('/');
    }

    public function storeContact(Request $request){
        //store contact Get in Touch Message

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => ['required']
        ]);

        $contacts = Contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ]);

        return redirect()->back();
    }
}
