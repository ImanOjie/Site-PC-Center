<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request){
        $request -> validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:4',
        ]);
        $user = new User();
        $user -> name = $request -> get('name');
        $user -> email = $request -> get('email');
        $user -> password = Hash::make($request -> get('password'));
        $user -> save();
        return redirect()->route('login_register')->with(['save_ok_shod'=>'ثبت نام با موفقیت انجام شد']);
    }

    public function login(Request $request){
        $user = User::where( "name" , $request->get('name'))->first();
        $pass = $request -> get('password');
        if ( Hash::check($pass,$user->password))
            Auth::login($user);
        return redirect()->route('home');
    }
}
