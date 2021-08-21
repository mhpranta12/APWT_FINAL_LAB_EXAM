<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class CustomerController extends Controller
{  
    public function login(Request $rq)
    {

        /*$user = User::find('idd) 
        ->get();*/
        
       $validationuname=Validator::make($rq->all(),
       [
           //'uname.required'=>'Please insert uname',
           'password'=> 'required|min:5',
           'uname'=> 'required'
       ]
       );

       $validationpassword=Validator::make($rq->all(),
       [
           //'uname.required'=>'Please insert uname',
           'password'=> 'required|min:5',
           'uname'=> 'required|max:4'
       ]
       );

       if($validationuname->fails())
       {
           echo "UserName is Error<br>";
       }
       if($validationpassword->fails())
       {
           echo "Password is Error";
       }
        //return view('user.dblist')->with('userList',$users);  
    } 

}
