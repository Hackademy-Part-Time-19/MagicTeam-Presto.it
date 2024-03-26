<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;
use \App\Models\Article;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name("home");

Route::get('/article/category/{category_id}', function ($category_id = null) {

    

    if ($category_id !== null)

        $articles = \App\Models\Article::where('category_id', $category_id)->get();

    else {

        $articles = \App\Models\Article::all();

    }

    return view('article.index', ["articles" => $articles , "category_id" => $category_id]);
})->name("category");



Route::middleware(['auth'])->group(function () {
    
    Route::resource('article', ArticleController::class);

});


Route::get("/revisor/home", [RevisorController::class, 'index'])->name('revisor.index');

Route::patch("/accept/article/{article}", [RevisorController::class, 'acceptArticle'])->name("revisor.accept_article");

Route::patch("/refuse/article/{article}", [RevisorController::class, 'refuseArticle'])->name("revisor.refuse_article");

