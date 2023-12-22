<?php

namespace App\Http\Controllers;

use App\Models\MaterialType;
use Illuminate\Http\Request;

class MaterialTypeController extends Controller
{
 /**
     * Display a listing of the resource.
     */
    public function index()
    {
<<<<<<< HEAD
        $materialtype = (materialtype::all());

        return $materialtype; //ПОМЕНЯТЬ
=======
        $materialtype = (MaterialType::all());

        return $materialtype; 
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
            $materialtype = new MaterialType;

            $materialtype->name = $request->name; //ПОМЕНЯТЬ
       

            $materialtype->save();
            return $materialtype;
        }
=======
            $materialtype = new MaterialType;
            $materialtype->name = $request->name; 
            $materialtype->save();
            return $materialtype;
>>>>>>> cb34fb6 (Last)
    }

    /**
     * Display the specified resource.
     */
<<<<<<< HEAD
    public function show(MaterialType $materialtype)
    {
        //
=======
    public function show($id)
    {
        $materialtype = MaterialType::find($id);
        return $materialtype;
>>>>>>> cb34fb6 (Last)
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MaterialType $materialtype)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MaterialType $materialtype)
    {
<<<<<<< HEAD
        if($request->id ==null)
        {
            $materialtype = new MaterialType;

            $materialtype->name = $request->name;
       

            $materialtype->save();
            
            return true;
        } 
=======
            $materialtype = MaterialType::find($request->id);
            $materialtype = new MaterialType;
            $materialtype->name = $request->name;
            $materialtype->save(); 
            return $materialtype;
        
>>>>>>> cb34fb6 (Last)
    }

    /**
     * Remove the specified resource from storage.
     */
<<<<<<< HEAD
    public function destroy(MaterialType $materialtype)
    {
        //
    }
}
=======
    public function destroy($id)
    {
        MaterialType::destroy($id);
      return true; 
    }
}
>>>>>>> cb34fb6 (Last)
