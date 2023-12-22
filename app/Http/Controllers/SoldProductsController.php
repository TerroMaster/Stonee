<?php

namespace App\Http\Controllers;

use App\Models\SoldProducts;
use Illuminate\Http\Request;

class SoldProductsController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $soldproducts = (soldproducts::all());

<<<<<<< HEAD
        return $soldproducts; //ПОМЕНЯТЬ
=======
        return $soldproducts; 
>>>>>>> cb34fb6 (Last)
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        if($request->id ==null)
        {
            $soldproducts = new SoldProducts;

            $soldproducts->name = $request->name; //ПОМЕНЯТЬ
            $soldproducts->price = $request->price;
            $soldproducts->sum = $request->sum;
            $soldproducts->stone_products_id = $request->stone_products_id;
        

            $soldproducts->save();
            return $soldproducts;
        }
=======
            $soldproducts = new SoldProducts;
            $soldproducts->name = $request->name; 
            $soldproducts->amount = $request->amount;
            $soldproducts->sum = $request->sum;
            $soldproducts->stone_products_id = $request->stone_products_id;
            $soldproducts->save();
            return $soldproducts;
>>>>>>> cb34fb6 (Last)
    }

    /**
     * Display the specified resource.
     */
<<<<<<< HEAD
    public function show(SoldProducts $soldproducts)
    {
        //
=======
    public function show($id)
    {
        $soldproducts = SoldProducts::find($id);
        return $soldproducts;
>>>>>>> cb34fb6 (Last)
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SoldProducts $soldproducts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SoldProducts $soldproducts)
    {
<<<<<<< HEAD
        if($request->id ==null)
        {
            $worker = new SoldProducts;

            $soldproducts->name = $request->name; //ПОМЕНЯТЬ
            $soldproducts->price = $request->price;
            $soldproducts->sum = $request->sum;
            $soldproducts->stone_products_id = $request->stone_products_id;

            $worker->save();
            
            return true;
        } 
=======
            $soldproducts = SoldProducts::find($request->id);
            $soldproducts->name = $request->name; 
            $soldproducts->amount = $request->amount;
            $soldproducts->sum = $request->sum;
            $soldproducts->stone_products_id = $request->stone_products_id;
            $soldproducts->save();
            return $soldproducts;
>>>>>>> cb34fb6 (Last)
    }

    /**
     * Remove the specified resource from storage.
     */
<<<<<<< HEAD
    public function destroy(SoldProducts $soldproducts)
    {
        //
=======
    public function destroy($id)
    {
        SoldProducts::destroy($id);
        return true;  
>>>>>>> cb34fb6 (Last)
    }
}