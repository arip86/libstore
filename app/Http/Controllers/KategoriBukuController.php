<?php

namespace App\Http\Controllers;
use App\Models\KategoriBuku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriBukuController extends Controller
{
    //buat view kategori buku
    public function index()
    {
        $kategori_buku = KategoriBuku::all();
        return view('admin.kategori_buku.kategori_buku', compact('kategori_buku'));
    }
    //buat fungsi create 
    public function create()
    {
        return view('admin.kategori_buku.tambah_buku');
    }
    //buat fungsi tambah kategori buku
    public function store(Request $request)
    {
        //insert data ke table kategori buku
        DB::table('kategori_buku')->insert([
            'kategori_buku' => $request->kategori_buku,
           
            
        ]);
        //alihkan halaman ke halaman kategori buku
        return redirect('/admin/kategori_buku');
    }
    //buat fungsi edit
    public function edit($idkategori_buku)
    {
        //mengambil data kategori buku berdasarkan id yang dipilih
        $kategori_buku = DB::table('kategori_buku')->where('idkategori_buku', $idkategori_buku)->get();
        //passing data kategori buku yang didapat ke view edit.blade.php
        return view('admin.kategori_buku.edit_buku', compact('kategori_buku'));
    }
    //buat fungsi update
    public function update(Request $request)
    {
        //update data kategori buku
        DB::table('kategori_buku')->where('idkategori_buku', $request->idkategori_buku)->update([
            'kategori_buku' => $request->kategori_buku,
            
        ]);
        //alihkan halaman ke halaman kategori buku
        return redirect('/admin/kategori_buku');
    }
    //buat fungsi hapus sesuai id
    public function delete($idkategori_buku){
        DB::table('kategori_buku')->where('idkategori_buku', $idkategori_buku)->delete();
        return redirect('/admin/kategori_buku');
        

    }


}
