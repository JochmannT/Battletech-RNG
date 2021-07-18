<?php

namespace App\Http\Controllers;

use App\Models\Mech;
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
            'name'=>'required',
            'type',
            'mech_class'=>'required',
            'tons'=>'required',
            'bv2'=>'required',
            'bv1',
            'cbills'=>'required',
        ]);

        Mech::create([
            'name'=>$request->name,
            'type'=>$request->type,
            'mech_class'=>$request->mech_class,
            'tons'=>$request->tons,
            'bv2'=>$request->bv2,
            'bv1'=>$request->bv1,
            'cbills'=>$request->cbills,
        ]);
    }
}
