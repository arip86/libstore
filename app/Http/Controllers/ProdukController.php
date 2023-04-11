<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\kategoriBuku;
use Illuminate\Support\Facades\DB;


class ProdukController extends Controller
{
    //panggil table buku dan kategori buku
    public function index()
    {
        $buku = Buku::all();
        $kategori_buku = kategoriBuku::all();
        return view('produk', compact('buku', 'kategori_buku'));
    }
    public function search(Request $request){
        $cari = $request->cari;
        $buku = Buku::where('judul', 'like', "%".$cari."%")->get();
        $kategori_buku = kategoriBuku::all();
        return view('front', compact('buku', 'kategori_buku'));
    }

}
