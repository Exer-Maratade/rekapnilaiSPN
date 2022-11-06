<?php

namespace App\Http\Controllers;

use App\Models\kompi;
use App\Models\tahun;
use App\Models\pleton;
use App\Models\akademik;
use App\Models\angkatan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AkademikController extends Controller
{
    public function index(Request $request){

        $pleton = pleton::all();
        $kompi = kompi::all();
        $tahun = tahun::all();
        $angkatan = angkatan::all();
        return view('layouts.Akademik', compact('pleton', 'kompi', 'tahun', 'angkatan'), [
            'title' => 'Bid Akademik',
            'kompi' =>'$kompi',
            'pleton' =>'$pleton',
            'tahun' =>'$tahun',
            'angkatan' =>'$angkatan'
        ]);
    }
}
