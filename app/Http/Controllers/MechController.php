<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MechController extends Controller
{
    public function index()
    {
        return view('mechs');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'body'=>'required'
        ]);
    }
}
