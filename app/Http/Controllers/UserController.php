<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Article;
use App\Models\User;
use App\Models\Image;


class UserController extends Controller
{
    

    public function UserProfile() {

        
        $user = Auth::user();

        $articles = Article::where('is_accepted', true)->where('user_id', $user->id)->get();

        $refused_articles = Article::where('is_accepted', false)->where('user_id',$user->id)->get();

        $articles_waiting = Article::where('is_accepted', null)->where('user_id', $user->id)->get();

        $all_articles = Article::where('user_id', $user->id)->get();


        return view("user.profile", ["user" => $user, "articles" => $articles, "articles_waiting" => $articles_waiting, "all_articles" => $all_articles, "refused_articles" => $refused_articles]);


    }

}
