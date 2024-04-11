<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Mail\RevisorRequestMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    //
    public function RevisorRequest (Request $request) {

        $text = $request->input("text");
        $user = Auth::user();
        

        Mail::to('indirizzo@example.com')->send(new RevisorRequestMail($text,$user));
        return redirect()->route("revisor.request")->with("success", "Richiesta inviata correttamente");

    }

    public function form_request () {

        return view("revisorRequestTEST");

    }

    public function index () {

        $query = Article::query();

        $articles = $query->where("is_accepted", null)->get();

        return view("revisorPage", compact('articles'));

    }

    public function make_revisor(User $user) {

        Artisan::call("presto:makeUserRevisor", ["email" => $user->email]);


    }

    

}
