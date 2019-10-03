<?php

namespace App\Http\Controllers;

use App\Suppliers;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //
        $suppliersList = Suppliers::all();
        return view('suppliers.secret_suppliers', compact('suppliersList'));
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("suppliers.create");
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
            $sup = new Suppliers();
            $sup->sup_id = $request->sup_id;       
            $sup->sup_name = $request->sup_name;
            $sup->sup_email = $request->sup_email;
            $sup->sup_tel = $request->sup_tel;
            $sup->sup_address = $request->sup_address;
            $sup->save();
            return redirect("/home/secret/suppliers");

        }

        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            //
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
            $sup = Suppliers::find($id);
            return view('suppliers.edit', compact('sup'));
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
            $sup = Suppliers::find($id);
            $sup->sup_id = $request->sup_id;       
            $sup->sup_name = $request->sup_name;
            $sup->sup_email = $request->sup_email;
            $sup->sup_tel = $request->sup_tel;
            $sup->sup_address = $request->sup_address;
            $sup->save();  
            return redirect("/home/secret/suppliers");
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
            $sup = Suppliers::find($id);
            $sup->delete();
            return redirect("/home/secret/suppliers");
        }
}
