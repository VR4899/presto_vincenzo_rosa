<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;

class ArticleController extends Controller
{
    public static function middleware(): array
    {
        return [
            new Middleware('auth', onli:['create']),
        ];
    }

    public function create()
{
    return view('article.create');
}
}
