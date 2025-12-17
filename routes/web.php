<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ArticleController;

Route::get('/',  [IndexController::class, 'index'])->name('home');

Route::prefix('article')->group(function () {
    Route::get('/create', [ArticleController::class, 'addItem'])->name('article.ajoutArticle');
    Route::get('/{id}', [ArticleController::class, 'show'])->name('article.details');
    Route::get('/update/{id}', [ArticleController::class, 'updateItem'])->name('article.misAJourArticle');
    Route::get('/delete/{id}', [ArticleController::class, 'deleteItem'])->name('article.suppresionArticle');
});


Route::fallback(function () {
    return view('errors.not-found');
});
