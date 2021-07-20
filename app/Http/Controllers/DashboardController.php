<?php

namespace App\Http\Controllers;

use App\Models\Mech;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function store(Request $request)
    {
        $bv2 = $request->bv2;
        $bv2min = $bv2 * 0.9;
        $bv2max = $bv2 * 1.1;
        $bv1 = $request->bv1;
        $bv1min = $bv1 * 0.9;
        $bv1max = $bv1 * 1.1;
        $mechs = [];
        foreach (DB::table('meches')->select('name', 'type') //coalesce sql
                     ->where('mech_class','=', $request->mech_class)
                     ->where('bv2', '<', $bv2max)
                     ->where('bv2', '>', $bv2min)
                     ->where('bv1', '<', $bv1max)
                     ->where('bv1', '>', $bv1min)
                     ->where('tonnage', '<=', intval($request->max_tonnage))
                     ->where('tonnage', '>=', intval($request->min_tonnage))
                    ->get()
                 as $mech) {
            array_push($mechs, $mech);
        }
        print_r($mechs);
        /*Mech::create([
            'name' => $request->name,
            'type' => $request->type,
            'mech_class' => $mech_class,
            'tonnage' => $request->tonnage,
            'bv2' => $request->bv2,
            'bv1' => $request->bv1,
            'cbills' => $request->cbills,*/

    }
}
