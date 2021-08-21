<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    
    public function index()
    {
        echo "MH Done";
    }
    public function check()
    {
        //$name="Pranta";
        //$id=123;
        return view ("login.index");
        /*->with('name','id') // sending variable with default value
        ->with('id','12')  
        ->withName ("Ertural")  // Alternative way of sending variable with default value through Camel Format of the variable
        ->withId ("choksun")
        ;*/
    }
    //
}
