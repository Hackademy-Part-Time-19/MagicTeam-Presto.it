<?php

use App\Http\Controllers\CategoryController;
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

Route::get('/article/category/{category_id}', [CategoryController::class, "CategoryIndex"])->name("category");



Route::middleware(['auth'])->group(function () {
    
    /* Route::resource('article', ArticleController::class); */

    Route::resource('article', ArticleController::class, ['only' => ['store', 'edit', 'update', 'destroy', 'create']]);

    Route::get("request/revisor", [RevisorController::class, 'form_request'] );
    Route::post("request/revisor", [RevisorController::class, 'RevisorRequest'] )->name("revisor.request");

    Route::middleware(['revisor'])->group(function () {
        
        Route::get("/revisor/home", [RevisorController::class, 'index'])->name('revisor.index');

    });

});

Route::resource('article', ArticleController::class, ['only' => ['index', 'show']]);



Route::patch("/accept/article/{article}", [RevisorController::class, 'acceptArticle'])->name("revisor.accept_article");

Route::patch("/refuse/article/{article}", [RevisorController::class, 'refuseArticle'])->name("revisor.refuse_article");

Route::get('/language/{locale}', function ($locale){
    session()->put('locale',$locale);
    return redirect()->back();

})->name('locale');

