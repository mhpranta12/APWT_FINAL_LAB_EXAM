<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function create(Request $request)
    {
        $job = Job::create($request->all());
        return response()->json(['job' => $job]);
    }
}
