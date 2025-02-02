<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CookieController extends Controller
{
    public function setCookie($name, $value){
        $minutes = 60;        
        return Cookie::queue($name, $value, $minutes);
     }

     public function getCookie($name){
         $value = \Request::cookie($name);
        //$value = $request->cookie($name);
        return $value;
     }

     public function deleterCookie()
     {
        Cookie::queue(Cookie::forget('name'));
     }
}
