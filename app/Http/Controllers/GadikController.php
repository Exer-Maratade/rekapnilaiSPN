<?php

namespace App\Http\Controllers;

use App\Models\Gadik;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class GadikController extends Controller
{
    public function LihatGadik()
    {
        $Gadik = Gadik::all();
        return view('layouts.Gadik', compact('Gadik'), [
            'Gadik' => '$Gadik',
            'title' => 'Tenaga Pendidik'
        ]);
    }

    public function storeGadik(Request $request)
    {

       $validasi =  $request->validate([
            // 'Name' => 'required',
            'Nrp' => 'bail', 'unique:Gadik|required|max:8|min:8',
            // 'Pangkat' => 'required',
            // 'Jabatan' => 'required',
            // 'Tahun' => 'required',
        ]);
        
        Gadik::create(
            [
                'Name' => $request->Name,
                'Nrp' => $request->Nrp,
                'Pangkat' => $request->Pangkat,
                'Jabatan' => $request->Jabatan,
                'Tahun' => $request->Tahun,
            ]
        );
        // dd($request->all());



        if ($request) {
            return redirect('/Gadik')->with('berhasil', 'Data berhasil ditambahkan');
        } elseif ($request) {
            return redirect('/Gadik')->with('gagal', 'data gagal ditambahkan');
        }
    }
}
