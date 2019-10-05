<?php

namespace App\Http\Controllers;

use App\Employees;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index() {
        return view('home.index');
    }

    function secretpage(){

        $emp = Employees::all();
        return view('home.secret', compact('emp'));
    }

   //登入頁面
    function loginpage(){
    
        return view('home.login');
    }
    
    function purchasepage(){
        return view('purchase.secret_purchase');
    }
    function bosspage(){
    
        return view('home.secret_bosslogin');
    }
}
