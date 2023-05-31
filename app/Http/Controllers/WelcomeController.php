<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function dashboard(){
        

        return inertia('Index/Dashboard');

    }
    public function forms(){
        

        return inertia('Index/Forms');

    }
    public function environement(){
        

        return inertia('Index/Env');

    }

    public function test(){
        

        return inertia('Index/Test');

    }
    public function user(){
        

        return inertia('Index/User');

    }
    public function migration(){
        

        return inertia('Index/Migration');

    }
    public function package(){
        

        return inertia('Index/Package');

    }
  
    //////Autenhtification
    public function login(){
        

        return inertia('Auth/login');

    }
    public function register(){
        

        return inertia('Auth/register');

    }
  

}
