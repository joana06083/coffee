<?php

namespace App\Http\Controllers;

use App\Http\Models\Products;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productsList = Products::all();
        return view('products.secret_products', compact('productsList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("products.create");
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
        
        
            $pro = new Products();
            $pro->pro_id = $request->pro_id;
            $pro->pro_name = $request->pro_name;
            $pro->pro_unit = $request->pro_unit;
            $pro->pro_price = $request->pro_price;
            $pro->pro_photo = $request->pro_photo;
            $pro->save();

            return redirect("/home/secret/products/show");
        

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
        $productsList = Products::all();
        return view('products.show', compact('productsList'));
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
        $pro = Products::find($id);
        return view('products.edit', compact('pro'));
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
      
            $pro = Products::find($id);
            $pro->pro_id = $request->pro_id;
            $pro->pro_name = $request->pro_name;
            $pro->pro_unit = $request->pro_unit;
            $pro->pro_price = $request->pro_price;
            $pro->pro_photo = $request->pro_photo;
            $pro->save();
            return redirect("/home/secret/products/show");
 
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
        $pro = Products::find($id);
        
        $pro->delete();
        return redirect("/home/secret/products/show");
    }
}
