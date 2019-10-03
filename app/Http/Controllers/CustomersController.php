<?php

namespace App\Http\Controllers;

use App\Customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //
        $customersList = Customers::all();
        return view('customers.secret_customers', compact('customersList'));
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("customers.create");
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
            $cust = new Customers();
            $cust->cust_id = $request->cust_id;       
            $cust->cust_name = $request->cust_name;
            $cust->cust_email = $request->cust_email;
            $cust->cust_tel = $request->cust_tel;
            $cust->cust_address = $request->cust_address;
            $cust->em_id = $request->em_id;
            $cust->save();
            return redirect("/home/secret/customers");

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
            $cust = Customers::find($id);
            return view('customers.edit', compact('cust'));
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
            $cust = Customers::find($id);
            $cust->cust_id = $request->cust_id;       
            $cust->cust_name = $request->cust_name;
            $cust->cust_email = $request->cust_email;
            $cust->cust_tel = $request->cust_tel;
            $cust->cust_address = $request->cust_address;
            $cust->em_id = $request->em_id;
            $cust->save();
            return redirect("/home/secret/customers");
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
            $cust = Customers::find($id);
            $cust->delete();
            return redirect("/home/secret/customers");
        }
}
