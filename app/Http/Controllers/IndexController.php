<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function CardIndex () {
    
        $ultimiArticoli = Article::where('is_accepted', true)->latest()->take(6)->get();

        return view('index', [ 'ultimiArticoli' => $ultimiArticoli]);
    }

    
}