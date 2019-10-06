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
    function announcementpage(){
    
        return view('home.secret_announcement');
    }
    //進銷貨頁面
    function purchasepage(){
        return view('home.secret_purchase');
    }
    
    function orderpage(){
    
        return view('home.secret_order');
    }

    
}
