<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $page_title='صفحه اصلی';
        return view('/pages/home', compact('page_title'));
    }
}
