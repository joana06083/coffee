<?php

namespace App\Http\Controllers;



use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index() {
        return view('home.index');
    }

    function loginpage(){
        return view('home.login');
     
    }

    function secretpage(){
        return view('home.secret');
    }



}
