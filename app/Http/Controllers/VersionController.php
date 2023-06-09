<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Version;

class VersionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return inertia(
            'Version/Index',
            [
                'version' => Version::all()



            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return inertia('Version/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Version::create($request->validate([

            'prefix' => 'required',
            'name' => 'required',
        ]));
        // version::create($request->all());

        return redirect()->route('version.index')->with('success', 'Version was created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Version $version)
    {
        return inertia(
            'Version/Show',
            [
                'version' => $version


            ]
        );
    }


    public function edit(Version $version)
    {
        return inertia(
            'Version/Edit',
            [
                'version' => $version


            ]
        );
    }


    public function update(Request $request, Version $version)
    {
        $version->update(
            $request->validate([

                'prefix' => 'required',
                'name' => 'required',

            ])
        );
        return redirect()->route('version.index')
            ->with('success', 'Version was updated successfully!');
    }


    public function destroy(Version $version)
    {
        $version->delete();
        return redirect()->back()->with('success', 'Version was deleted successfully!');
    }
}
