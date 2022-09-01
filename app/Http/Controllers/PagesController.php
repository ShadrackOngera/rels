<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function showAboutPage(){
        //show home page

        return view('pages.about');
    }
}
