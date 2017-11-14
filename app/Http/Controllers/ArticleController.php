<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show()
    {
        \Session(['from' => '我來自文章頁']);
        return view('article');
    }
}
