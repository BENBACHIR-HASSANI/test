<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return inertia(
            'User/Index',
            [
                'user' => User::orderByDesc('created_at')
                ->paginate(5)



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
        return inertia('User/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        User::create($request->validate([

            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'trigramme_user' => 'required|string',
            'email' => 'required|string|email',
            'stat_id' => 'required|string',
            'password' => 'required|string',
            'confirm_password' => 'required|string',
            'tel' => 'required|string',
            'role' => 'required|string'
        ]));
        // User::create($request->all());

        return redirect()->route('user.index')->with('success', 'Utilisateur a été créé avec succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return inertia(
            'User/Show',
            [
                'user' => $user


            ]
        );
    }


    public function edit(User $user)
    {
        return inertia(
            'User/Edit',
            [
                'user' => $user


            ]
        );
    }


    public function update(Request $request, User $user)
    {
        $user->update(
            $request->validate([

                'first_name' => 'required',
                'last_name' => 'required',
                'trigramme_user' => 'required',
                'email' => 'required',
                'stat_id' => 'required',
                'password' => 'required',
                'confirm_password' => 'required',
                'tel' => 'required',
                'role' => 'required'

            ])
        );
        return redirect()->route('user.index')
        ->with('success', 'Utilisateur a été modifié avec succès!');
    }


    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back()->with('success', 'Utilisateur a été supprimé avec succès!');
    }
}