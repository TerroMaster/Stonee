<?php

namespace App\Http\Controllers;

use App\Models\StoneProducts;
use Illuminate\Http\Request;

class StoneProductsController extends Controller
{

  /**
     * Display a listing of the resource.
     */
    public function index()
    {
<<<<<<< HEAD
        $stoneproducts = (stoneproducts::all());

        return $stoneproducts; //ПОМЕНЯТЬ
=======
        $stoneproducts = (StoneProducts::all());
        return $stoneproducts; 
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
            $stoneproducts = new StoneProducts;

            $stoneproducts->name = $request->name; //ПОМЕНЯТЬ
            $stoneproducts->type_id = $request->type_id;
            $stoneproducts->price = $request->price;
         

            $worker->save();
            return $worker;
        }
=======
            $stoneproducts = new StoneProducts;
            $stoneproducts->name = $request->name; 
            $stoneproducts->type_id = $request->type_id;
            $stoneproducts->price = $request->price;
            $stoneproducts->save();
            return $stoneproducts;
>>>>>>> cb34fb6 (Last)
    }

    /**
     * Display the specified resource.
     */
<<<<<<< HEAD
    public function show(StoneProducts $stoneproducts)
    {
        //
=======
    public function show($id)
    {
        $stoneproducts  = StoneProducts::find($id);
        return $stoneproducts;
>>>>>>> cb34fb6 (Last)
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StoneProducts $stoneproducts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StoneProducts $stoneproducts)
    {
<<<<<<< HEAD
        if($request->id ==null)
        {
            $stoneproducts = new StoneProducts;

            $stoneproducts->name = $request->name; //ПОМЕНЯТЬ
            $stoneproducts->type_id = $request->type_id;
            $stoneproducts->price = $request->price;

            $stoneproducts->save();
            
            return true;
        } 
=======
            $stoneproducts = StoneProducts::find($request->id);
            $stoneproducts->name = $request->name; 
            $stoneproducts->type_id = $request->type_id;
            $stoneproducts->price = $request->price;
            $stoneproducts->save();
            return $stoneproducts;
>>>>>>> cb34fb6 (Last)
    }

    /**
     * Remove the specified resource from storage.
     */
<<<<<<< HEAD
    public function destroy(StoneProducts $stoneproducts)
    {
        //
=======
    public function destroy($id)
    {
        StoneProducts::destroy($id);
        return true; 
>>>>>>> cb34fb6 (Last)
    }
}
