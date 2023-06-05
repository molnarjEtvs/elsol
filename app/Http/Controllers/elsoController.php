<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class elsoController extends Controller
{
    public function elso(){
        
        $kocsi['tipus'] = "Suzuki";
        $kocsi['evjarat'] = 2005;

        $gyumolcs['nev'] = "alma";
        $gyumolcs['ara'] = 3000;

        return view("elso",["kocsi" => $kocsi,"gyumolcs" => $gyumolcs]);
    }
}
