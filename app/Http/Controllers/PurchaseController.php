<?php

namespace App\Http\Controllers;

use App\Http\Models\Purchasemasters;
use App\Http\Models\Purchaselists;

use Illuminate\Http\Request;

class PurchaseController extends Controller
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
        $purchasemasters = Purchasemasters::all();
        $purchaselists = Purchaselists::all();
        return view('purchases.secret_purchase', compact('purchasemasters','purchaselists'));
        

    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       
        return view('purchases.create');
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
            $purmaster = new Purchasemasters();
            $pur = new Purchaselists();

            $purmaster->pur_id = $request->pur_id; 
            $purmaster->pur_date = $request->pur_date; 
            $purmaster->pur_demand = $request->pur_demand; 
            $purmaster->pur_shipped = $request->pur_shipped;
            $purmaster->pur_shipmentnumber = $request->pur_shipmentnumber; 
            $purmaster->sup_id = $request->sup_id;
            $purmaster->pur_address = $request->pur_address; 
            $purmaster->em_id = $request->em_id;
           
            $pur->pur_id = $request->pur_id; 
            $pur->pro_id = $request->pro_id; 
            $pur->prime_costs = $request->prime_costs; 
            $pur->purlist_amount = $request->purlist_amount; 
            $pur->prime_unit = $request->prime_unit; 
            $pur->purlist_discount = $request->purlist_discount; 
            $pur->purlist_total = $request->purlist_total; 

            $purmaster->save();
            $pur->save();

            return redirect("/home/secret/purchase/show");
         

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
            $purchasemasters = Purchasemasters::all();
            $purchaselists = Purchaselists::all();
            return view('purchases.show', compact('purchasemasters','purchaselists'));
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
            $purmaster = Purchasemasters::find($id);
            $pur = Purchaselists::find($id);

            return view('purchases.edit', compact('purmaster','pur'));

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
            $purmaster = Purchasemasters::find($id);
            $pur = Purchaselists::find($id);

             
            $purmaster->pur_shipmentnumber = $request->pur_shipmentnumber;
            $purmaster->pur_date = $request->pur_date; 
            $purmaster->pur_demand = $request->pur_demand; 
            $purmaster->pur_shipped = $request->pur_shipped;
            $purmaster->pur_id = $request->pur_id;
            $purmaster->sup_id = $request->sup_id;
            $purmaster->pur_address = $request->pur_address; 
            $purmaster->em_id = $request->em_id;
           
            $pur->pur_id = $request->pur_id; 
            $pur->pro_id = $request->pro_id; 
            $pur->prime_costs = $request->prime_costs; 
            $pur->purlist_amount = $request->purlist_amount; 
            $pur->prime_unit = $request->prime_unit; 
            $pur->purlist_discount = $request->purlist_discount; 
            $pur->purlist_total = $request->purlist_total; 

            $purmaster->save();
            $pur->save();

            return redirect("/home/secret/purchase/show");
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
            $purmaster = Purchasemasters::find($id);
            $pur = Purchaselists::find($id);

            $purmaster =delete();
            $pur = delete();

            return redirect("/home/secret/purchase/show");
        }
}
