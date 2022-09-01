<?php

namespace App\Http\Controllers;

use App\Models\MailingList;
use Illuminate\Http\Request;

class PagesController extends Controller
{
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

        $post = MailingList::create([
            'email' => $request->input('email'),
        ]);

        return redirect('/');
    }
}
