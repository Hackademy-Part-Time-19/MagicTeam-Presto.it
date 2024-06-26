<?php

use \App\Models\Article;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', [IndexController::class,"CardIndex"])->name("home");



Route::get('/article/category/{category_id}', [CategoryController::class, "CategoryIndex"])->name("category");



Route::middleware(['auth'])->group(function () {
    
    
    /* Rotte articolo auth, tranne index e show */
    Route::resource('article', ArticleController::class, ['only' => ['store', 'edit', 'update', 'destroy', 'create']]);

    /* Rotte form revisore */
    Route::get("request/revisor", [RevisorController::class, 'form_request'] );
    Route::post("request/revisor", [RevisorController::class, 'RevisorRequest'] )->name("revisor.request");

    /* Rotte user */
    Route::get("user/profile", [UserController::class, 'UserProfile'])->name("user.profile");
    

    /* Rotte auth revisore */
    Route::middleware(['revisor'])->group(function () {
        
        Route::get("/revisor/home", [RevisorController::class, 'index'])->name('revisor.index');

        Route::get("revisor/accept_new/{user}",[RevisorController::class, "make_revisor"])->name("make.revisor");

        Route::patch("/revisor/accept/{article}", [RevisorController::class, 'acceptArticle'])->name("revisor.accept_article");

        Route::patch("/revisor/refuse/{article}", [RevisorController::class, 'refuseArticle'])->name("revisor.refuse_article");

    });

});

/* Rotte articolo index e show pubbliche */
Route::resource('article', ArticleController::class, ['only' => ['index', 'show']]);




Route::get('/language/{locale}', function ($locale){
    session()->put('locale',$locale);
    setrawcookie("googtrans", '/it/'.$locale, 0, '/');
    return redirect()->back();
})->name('locale');