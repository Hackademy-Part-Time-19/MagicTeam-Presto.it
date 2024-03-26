<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleMakeRequest;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */
    public function index(Request $request)
{
    $search = $request->query('search');
   

    $query = Article::query();

    $query->where('is_accepted', true);

    if ($search) {
        $query->where("name", "like", "%$search%")
              ->orWhere("description", "like", "%$search%");
        
    }

    SortByTime($query);

    $articles = $query->get();

    return view('article.index', compact('articles'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view("article.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleMakeRequest $request)
    {
        //Deprecated

        $article = auth()->user()->articles()->create([

            "name" => $request->input("name"),
            "description" => $request->input("description"),
            "price" => $request->input("price"),
            "category_id" => $request->input("category_id"),
            "user_id" =>  auth()->user()->id,    

        ]);

        return redirect()->route("article.index")->with("success", "Post created successfully");

        
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //

        return view("article.show",["article" => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //

        return view("article.edit",["article" => $article]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleMakeRequest $request, Article $article)
    {
        //

        $article->update([

            "name" => $request["name"],
            "description" => $request["description"],
            "price" => $request["price"],
            "category_id" => $request["category_id"],
                 

        ]);
       
        

        return redirect()->route("article.index")->with("success", "Post updated successfully");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //

        
        
        $article->delete();

        return redirect()->route("article.index")->with("success", "Post deleted successfully");
    }
     
}

function SortByTime($articoli){
    $articoli->orderByDesc("created_at");
    return $articoli;
}
