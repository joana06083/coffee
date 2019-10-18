<?php

namespace App\Http\Controllers;

use App\Http\Models\Employees;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employeesList = Employees::all();
        return view('employees.secret_employees', compact('employeesList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("employees.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    
        $emp = new Employees();
        $emp->em_id = $request->em_id;
        $emp->em_account = $request->em_account;
        $emp->em_password = $request->em_password;
        $emp->d_name = $request->d_name ;
        $emp->em_name = $request->em_name;
        $emp->em_email = $request->em_email;
        $emp->em_tel = $request->em_tel;
        $emp->em_address = $request->em_address;

        $emp->save();
        return redirect("/home/secret/employees/show");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $employeesList = Employees::all();
        return view('employees.show', compact('employeesList'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $emp = Employees::find($id);
        return view('employees.edit', compact('emp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $emp = Employees::find($id);

        $emp->em_id = $request->em_id;
        
        $emp->em_account = $request->em_account;
        $emp->em_password = $request->em_password;
        $emp->d_name = $request->d_name ;
        $emp->em_name = $request->em_name;
        $emp->em_email = $request->em_email;
        $emp->em_tel = $request->em_tel;
        $emp->em_address = $request->em_address;
        $emp->save();
        return redirect("/home/secret/employees/show");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $emp = Employees::find($id);
        $emp->delete();
        return redirect("/home/secret/employees/show");
    }
}
