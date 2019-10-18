<?php

namespace App\Http\Controllers;

use App\Users;
use App\Http\Models\Employees;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index() {
        return view('home.index');
    }

    function secretpage(){

        // return view('employees.secret_employees');

        return view('products.secret_products');

        // return view('home.secret_announcement');

    }

   //登入頁面
    function login()
    {
        return view('home.login');

    }

    //公告頁
    function announcementpage(){
    
        return view('home.secret_announcement');
    }


}

