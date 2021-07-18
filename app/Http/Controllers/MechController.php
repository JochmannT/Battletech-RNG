<?php

namespace App\Http\Controllers;

use App\Models\Mech;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;

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
            'type'=> 'max:255',
            'tonnage'=>'required',
            'bv2'=>'required',
            'bv1'=> 'max:9999',
            'cbills'=>'required',
        ]);
        if ($request->tonnage<40){
            $mech_class = 'Light';
        } elseif ($request->tonnage<60) {
            $mech_class = 'Medium';
        } elseif ($request->tonnage<80) {
            $mech_class = 'Heavy';
        } else {
            $mech_class = 'Assault';
        }
       // if(isEmpty()
            Mech::create([
            'name'=>$request->name,
            'type'=>$request->type,
            'mech_class'=>$mech_class,
            'tonnage'=>$request->tonnage,
            'bv2'=>$request->bv2,
            'bv1'=>$request->bv1,
            'cbills'=>$request->cbills,
        ]);
            return view('mechs');

    }
}
