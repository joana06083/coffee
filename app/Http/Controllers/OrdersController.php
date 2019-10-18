<?php

namespace App\Http\Controllers;


use App\Http\Models\Ordermaters;
use App\Http\Models\Orderlists;

use Illuminate\Http\Request;

class OrdersController extends Controller
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
        $ordermaters = Ordermaters::all();
        $orderlists = Orderlists::all();
        return view('orders.secret_order', compact('ordermaters','orderlists'));

    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view('orders.create');
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
            $ordm = new Ordermaters();
            $ord = new Orderlists();

            $ordm->ordermater_id = $request->ordermater_id; 
            $ordm->ordermater_date = $request->ordermater_date; 
            $ordm->ordermater_demand = $request->ordermater_demand; 
            $ordm->ordermater_shipped = $request->ordermater_shipped;
            $ordm->ordermater_shipmentnumber = $request->ordermater_shipmentnumber; 
            $ordm->cust_id = $request->cust_id;
            $ordm->ordermater_address = $request->ordermater_address; 
            $ordm->em_id = $request->em_id;
           
            $ord->ordermater_id = $request->ordermater_id; 
            $ord->pro_id = $request->pro_id; 
            $ord->pro_price = $request->pro_price; 
            $ord->orderlist_amount = $request->orderlist_amount; 
            $ord->prime_unit = $request->prime_unit; 
            $ord->orderlist_discount = $request->orderlist_discount; 
            $ord->order_total = $request->order_total; 

            $ordm->save();
            $ord->save();

            return redirect("/home/secret/orders/show");
         

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
            $ordermaters = Ordermaters::all();
            $orderlists = Orderlists::all();
           
            return view('orders.show', compact('ordermaters','orderlists'));
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
              $ordm =Ordermaters::find($id);
              $ord = Orderlists::find($id);
             
              return view('orders.edit', compact('ordm','ord'));

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
            $ordm = new Ordermaters();
            $ord = new Orderlists();

            $ordm->ordermater_id = $request->ordermater_id; 
            $ordm->ordermater_date = $request->ordermater_date; 
            $ordm->ordermater_demand = $request->ordermater_demand; 
            $ordm->ordermater_shipped = $request->ordermater_shipped;
            $ordm->ordermater_shipmentnumber = $request->ordermater_shipmentnumber; 
            $ordm->cust_id = $request->cust_id;
            $ordm->ordermater_address = $request->ordermater_address; 
            $ordm->em_id = $request->em_id;
           
            $ord->ordermater_id = $request->ordermater_id; 
            $ord->pro_id = $request->pro_id; 
            $ord->pro_price = $request->pro_price; 
            $ord->orderlist_amount = $request->orderlist_amount; 
            $ord->prime_unit = $request->prime_unit; 
            $ord->orderlist_discount = $request->orderlist_discount; 
            $ord->order_total = $request->order_total; 

            $ordm->save();
            $ord->save();

            return redirect("/home/secret/orders/show");
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
            $ordm =Ordermaters::find($id);
            $ord = Orderlists::find($id);

            $ordm = delete();
            $ord = delete();

            return redirect("/home/secret/orders/show");
        }
}
