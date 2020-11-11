<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuestArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return view("guest.posts.index", compact("articles"));
    }

    public function show($slug)
    {
        $articles = Article::where("slug", $slug)->first();

        return view("guest.posts.show", compact("articles"));
    }
}