<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;


// PublicController 

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

// ------------------------------------------------------------------------------------ EDN PublicController -------


// ArticleController
Route::get('/create/article', [ArticleController::class, 'create'])->name('create.article');

// ------------------------------------------------------------------------------------ End ArticleController -------