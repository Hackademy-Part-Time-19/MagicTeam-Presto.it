<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function CategoryIndex ($category_id = null) {

    

        if ($category_id !== null)
    
            $articles = Article::where('category_id', $category_id)->get();
    
        else {
    
            $articles = Article::all();
    
        }
    
        return view('article.index', ["articles" => $articles, "category_id"=> $category_id]);
    }
}
