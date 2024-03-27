<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\RevisorRequestMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RevisorController extends Controller
{
    //
    public function RevisorRequest (Request $request) {

        $text = $request->input("text");
        $user = Auth::user();
        

        Mail::to('indirizzo@example.com')->send(new RevisorRequestMail($text,$user));

    }

    public function form_request () {

        return view("revisorRequestTEST");

    }

    public function index () {

        return view("testmiddleware");

    }
    

}
