<?php

namespace App\Http\Controllers;

use App\Employee;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index() {
        return view('home.index');}

    function loginpage(){
        $employeeList = Employee::all();
        return view('home.login', compact('employeeList'));
     
    }

    function secretpage(){
        return view('home.secret');
    }



}
