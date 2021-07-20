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

    private function getMechs($column, $operator, $needle): array
    {
        $mechs = [];
        if (!empty($needle)) {
            foreach (DB::table('meches')->select('name', 'type')
                         ->where($column, $operator, $needle)
                         ->get()
                     as $mech) {
                array_push($mechs, $mech);
            }
        }
        return $mechs;
    }

    public function store(Request $request)
    {
        $bv2 = $request->bv2;
        $bv2min = $bv2 * 0.9;
        $bv2max = $bv2 * 1.1;
        $bv1 = $request->bv1;
        $bv1min = $bv1 * 0.9;
        $bv1max = $bv1 * 1.1;
        $mechs_class = $this->getMechs('mech_class', '=', $request->mech_class);
        $mechs_bv2max = $this->getMechs('bv2', '<', $bv2max);
        $mechs_bv2min = $this->getMechs('bv2', '>', $bv2min);
        $mechs_bv1max = $this->getMechs('bv1', '<', $bv1max);
        $mechs_bv1min = $this->getMechs('bv1', '>', $bv1min);
        $mechs_tonmax = $this->getMechs('tonnage', '<=', intval($request->max_tonnage));
        $mechs_tonmin = $this->getMechs('tonnage', '>=', intval($request->min_tonnage));
        array_intersect($mechs_class)
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
