<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Env_source;

class Env_sourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // retourne la liste des env_source
    public function index(Request $request)
    {
        $filters = $request->only([
            'name'

        ]);
        // $query=Env_source::all();
        $query = Env_source::orderByDesc('created_at');

        if ($filters['name'] ?? false) {
            $query->where('name', $filters['name']);
        }


        return inertia(
            'Environement/Index',
            [
                'filters' => $filters,
                'env_source' => $query->paginate(5)
                    ->withQueryString(),
                'env_s' => Env_source::all()








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
        return inertia('Environement/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Env_source::create($request->validate([


            'name' => 'required',
        ]));
        // env_source::create($request->all());

        return redirect()->route('env_source.index')->with('success', 'Environnement source a été créé avec succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Env_source $env_source)
    {
        return inertia(
            'Environement/Show',
            [
                'env_source' => $env_source


            ]
        );
    }


    public function edit(Env_source $env_source)
    {
        return inertia(
            'Environement/Edit',
            [
                'env_source' => $env_source


            ]
        );
    }


    public function update(Request $request, Env_source $env_source)
    {
        $env_source->update(
            $request->validate([


                'name' => 'required',

            ])
        );
        return redirect()->route('env_source.index')
        ->with('success', 'Environnement source a été mis à jour avec succès!');
    }


    public function destroy(Env_source $env_source)
    {
        $env_source->delete();
        return redirect()->back()->with('success', 'Environnement source a été supprimé avec succès!');
    }
}