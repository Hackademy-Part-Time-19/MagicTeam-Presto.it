<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;


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

        $articles = \App\Models\Articles::all();

    }

    return view('article.index', ["articles" => $articles]);
})->name("category");



Route::middleware(['auth'])->group(function () {
    
    Route::resource('article', ArticleController::class);
    Route::get("request/revisor", [RevisorController::class, 'view'] );
    Route::post("request/revisor", [RevisorController::class, 'RevisorRequest'] )->name("revisor.request");

});


Route::get("/revisor/home", [RevisorController::class, 'index'])->name('revisor.index');

Route::patch("/accept/article/{article}", [RevisorController::class, 'acceptArticle'])->name("revisor.accept_article");

Route::patch("/refuse/article/{article}", [RevisorController::class, 'refuseArticle'])->name("revisor.refuse_article");

