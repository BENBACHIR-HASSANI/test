<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function Dashboard(){
        

        return inertia('Index/Dashboard');

    }
    public function env(){
        

        return inertia('Index/Env');

    }
    public function migration(){
        

        return inertia('Index/Migration');

    }
    public function package(){
        

        return inertia('Index/Package');

    }
    public function forms(){
        

        return inertia('Index/forms');

    }
    //////Autenhtification
    public function login(){
        

        return inertia('Auth/login');

    }
    public function register(){
        

        return inertia('Auth/register');

    }
}
