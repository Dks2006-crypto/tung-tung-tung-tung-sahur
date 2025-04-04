<?php

use App\Http\Controllers\Articles\ArticlesController;
use Illuminate\Support\Facades\Route;

Route::namespace('Articles')->name('articles.')->group(function(){
    Route::get('/articles', [ArticlesController::class, 'index'])->name('index');
});
