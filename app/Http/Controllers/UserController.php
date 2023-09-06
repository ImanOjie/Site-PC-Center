<?php

namespace App\Http\Controllers;

use App\Models\User;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use function Laravel\Prompts\alert;

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

        $name = $request->input('name');
        $password = $request->input('password');

        $user = User::where('name', '=', $name)->first();
        if (!$user) {
            return response()->json(['نام کاربری اشتباه است']);
        }
        if (!Hash::check($password, $user->password)) {
            return response()->json(['رمز عبور اشتباه است']);
        }
        Auth::login($user);
        return redirect()->route('home');
    }











        /*$name = $request->input('name');
        $user = User::where( "name" , $request->get('name'))->first();
        $pass = $request -> get('password');
        if ( !Hash::check($pass,$user->password)){
            return response()->json('نام کاربری یا رمز ورود اشتباه است');
        }
        else {
            Auth::login($user);
            return redirect()->route('home');
        }*/

        /*$name = $request->input('name');
        $password = $request->input('password');

        $username = $request->get('name');
        $userpass = Hash::check($request->get('password'));

        if (($userpass == $password) && ($userpass == $name)){
            return response()->json(['ok']);
        } else {
            return response()->json(['nokey']);
        }*/






}
