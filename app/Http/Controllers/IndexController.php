<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function CardIndex () {

        $articles = Article::where('is_accepted', true)->get();
    
        $ultimiArticoli = Article::latest()->take(6)->get();

        return view('index', ["articles" => $articles, 'ultimiArticoli' => $ultimiArticoli]);
    }

    
}