<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

    public function register(Request $request){
        $request -> validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = new User();
        $user -> name = $request -> get('name');
        $user -> email = $request -> get('email');
        $user -> password = Hash::make($request -> get('password'));
        $user -> save();
        return redirect()->route('login_register')->with(['save_ok_shod'=>'ثبت نام با موفقیت انجام شد']);
    }
}
