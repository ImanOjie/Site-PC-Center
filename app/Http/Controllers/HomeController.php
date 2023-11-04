<?php

namespace App\Http\Controllers;

use App\Models\Products_Graphic;
use App\Models\Products_Motherboard;
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
<<<<<<< HEAD
        $products = Products_Motherboard::all();
        foreach($products as $item){
        $item->image = 'data:image/jpeg;base64,' . base64_encode( $item->image);}
        return view('/pages/menu/products_list', compact('page_title','products','item'));
    }
    public function graphic(){
        $page_title='مادربرد';
        $products = Products_Graphic::all();
        foreach($products as $item){
        $item->image = 'data:image/jpeg;base64,' . base64_encode( $item->image);}
        return view('/pages/menu/products_list', compact('page_title','products','item'));
    }

=======
        return view('/pages/menu/motherboard', compact('page_title'));
    }
    public function graphic(){
        $page_title='گرافیک';
        return view('/pages/menu/graphic', compact('page_title'));
    }
    public function cpu(){
        $page_title='پردازنده';
        return view('/pages/menu/cpu', compact('page_title'));
    }
>>>>>>> 482ace1e05e366ec0323b3ea27de0a134867815c
}
