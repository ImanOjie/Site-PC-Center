<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $page_title='صفحه اصلی';
        return view('/pages/home', compact('page_title'));
    }
    public function login_register(){
        $page_title='ورود / ثبت نام';
        return view('/pages/login_register', compact('page_title'));
    }
}
