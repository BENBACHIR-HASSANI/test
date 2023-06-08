<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return inertia('Type/Index',
        [
            'type'=>Type::all()



        ]);
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return inertia('Type/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          
          Type::create($request->validate([
            
            'nextIndex'=>'required|integer|min:0|max:10',
            'name'=>'required',]));
            // Type::create($request->all());

        return redirect()->route('type.index')->with('success','Type was created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Type $type)
    {
        return inertia('Type/Show',
        [
            'type'=>$type


        ]);
           
    }

    
    public function edit(Type $type)
    {
        return inertia('Type/Edit',
        [
            'type'=>$type


        ]);
    }


    public function update(Request $request, Type $type)
    {
        $type->update(
            $request->validate([

            'nextIndex'=>'required|integer|min:0|max:10',
            'name'=>'required',

        ])
    );
        return redirect()->route('type.index')
        ->with('success', 'type was change !');
    }

  
    public function destroy(Type $type)
    {
        $type->delete();
        return redirect()->back()->with('success','Type waas deleted!');
    }
}
