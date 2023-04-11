<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use App\Models\kategoriBuku;


use Illuminate\Http\Request;

class AboutController extends Controller
{
     public function index()
    
    {
        $buku = Buku::all();
        $kategori_buku = kategoriBuku::all();
        return view('about', compact('buku', 'kategori_buku'));

    }
    public function search(Request $request){
        $cari = $request->cari;
        $buku = Buku::where('judul', 'like', "%".$cari."%")->get();
        $kategori_buku = kategoriBuku::all();
        return view('about', compact('buku', 'kategori_buku'));
    }
}
