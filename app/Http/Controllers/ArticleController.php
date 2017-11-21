<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cookie;
use Illuminate\Cookie\CookieJar;

class ArticleController extends Controller
{
    public function show(Request $request)
    {
        Cookie::queue('test', 'Hello', 10);
        
        $cookies = $request->cookie();
        $cookie = $request->cookie('test');
        $user_ary = $request->cookie('user_ary');

        $this->cookieTest();

        \Session(['from' => '我來自文章頁']);
        return view('article');
    }
    
    protected function cookieTest()
    {
        $array = [
            'name' => 'Jeri',
            'age' => '18'
        ];
        
        Cookie::queue('user_ary', $array, 10);
        
        return;
    }
}
