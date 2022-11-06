<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Else_;

class SiswaController extends Controller
{

    // public function index(){
    //     $Siswa = Siswa::all();
    //     return view('component.SelectSiswa', compact('Siswa'), [
    //         'Siswa' => '$Siswa',
    //         'title' => 'Siswa'
    //     ]);
    // }


    public function search(Request $request)
    {
        
        if ($request->has('search')) {
            $Siswa = Siswa::where('Name','LIKE', '%' .$request->search. '%')->paginate();
        } else {
            $Siswa = Siswa::with('pleton', 'kompi', 'tahun', 'angkatan')->latest()->paginate(10);
        }
        // return view('component.SelectSiswa', compact('Siswa'));
        return view ('layouts.Siswa', compact('Siswa', 'request'),[
            '$Siswa' => 'Siswa',
            'active' => 'Siswa',
        ]);


    }

    public function Storesiswa(Request $request){
        
        Siswa::create(
        );
        dd($request->all());



        if ($request) {
            return redirect('/Siswa')->with('berhasil', 'Data berhasil ditambahkan');
        } elseif ($request) {
            return redirect('/Siswa')->with('gagal', 'data gagal ditambahkan');
        }
    }

}
