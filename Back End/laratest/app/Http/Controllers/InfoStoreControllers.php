<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoStoreControllers extends Controller
{
    public function store (Request $req)
    {
        $user= ['name' => $req->id,$req->name];
        echo $req->uname;
        echo "Psoted";
    }
}
