<?php

namespace App\Http\Controllers;
use App\Models\employeemodel;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function create(Request $rq)
    {
        /*$employer = employeemodel::create($rq->all());
        return response()->json(['employer' => $employer]);*/

        $user = new employeemodel;

        $user->name=$rq->name;
        $user->username=$rq->uname;
       

        $user->phn=$rq->phone;
       
        $user->password=$rq->password;
       $user->save();
       echo "SAVED";

    /*$employee = employee::create($request->all());
    return response()->json(['employer' => $employee]);
       echo ($request->name);
        echo "done with employeer";*/
    }

    public function list()
    {
        $user = employeemodel::all();
        return ($user);
    }

}
