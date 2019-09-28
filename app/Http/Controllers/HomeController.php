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

    function loginpage(){
        
        $employeesList = Employees::all();
        return view('home.login', compact('employeesList'));
    }

    function secretpage(){
        
        return view('home.secret');
    }



}
