<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MapelController extends Controller
{

    public function LihatMapel(Request $request){
        // $Gadik = Gadik::all();
        $Mapel = Mapel::with('Gadik')->paginate();
        return view('layouts.Pelajaran', compact('Mapel'),[
            'Mapel' => '$Mapel',
            // 'Gadik' => '$Gadik',
            'title' => 'Mata Pelajaran',
        ]);
    }


    public function store (Request $request){
        Mapel::create([
            'Pelajaran' =>'requared' | 'max:100',
            'Tahun' => 'required',
            'Angkatan' => 'required',
            'gadik_id' => 'required'
        ]);

        if ($request) {
            return redirect('/layouts.Pelajaran')->with('success', 'Mata pelajaran berhasil ditambahkn');
         }else{
            return redirect('layouts.Pelajaran')->with('error', 'data gagal ditambahkan');
         }
        
    }
}
