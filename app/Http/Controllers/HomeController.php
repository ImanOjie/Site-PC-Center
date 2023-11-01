<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use function Laravel\Prompts\password;

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

    public function purchases(){
        $page_title='سبد خرید';
        return view('/pages/purchases', compact('page_title'));
    }

    public function motherboard(){
        $page_title='مادربرد';
        return view('/pages/menu/motherboard', compact('page_title'));
    }

}
