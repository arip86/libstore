<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use Illuminate\Support\Facades\DB;
use App\Models\KategoriBuku;
class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //panggil table buku dan kategori buku
        $buku = DB::table('buku')
            ->join('kategori_buku', 'buku.kategori_id', '=', 'kategori_buku.idkategori_buku')
            ->select('buku.*', 'kategori_buku.kategori_buku')
            ->get();
        //panggil view buku
        return view('admin.buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //table buku
        $buku = DB::table('buku')
        ->join('kategori_buku', 'buku.kategori_id', '=', 'kategori_buku.idkategori_buku')
        ->select('buku.*', 'kategori_buku.kategori_buku')
        ->get();
        $kategori_buku = KategoriBuku::all();


        //arahkan ke view tambah buku
       return view('admin.buku.create_buku', compact('buku', 'kategori_buku'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // insert data ke table buku
        //nampilin kategori buku
        if(!empty($request->cover)){
            $fileName = 'cover-'.$request->id.'.'.$request->cover->extension();
            //$fileName = $request->foto->getClientOriginalName();
            $request->cover->move(public_path('admin/image'),$fileName);
        }
        else{
            $fileName = '';
        }
        DB::table('buku')->insert([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'harga' => $request->harga,
            'stok' => $request->stok,
            //kategori_id diambil dari idkategori_buku di table kategori_buku
            'kategori_id' => $request->kategori_id,
            //upload cover buku ke folder public/cover
            'cover' => $fileName,
                
        ]);
        //alihkan halaman ke halaman buku
        return redirect('/admin/buku');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        //mengambil data buku berdasarkan id yang dipilih
        $buku = DB::table('buku')->where('id', $id)->get();


        //passing data buku yang didapat ke view edit.blade.php
        return view('admin.buku.edit_buku', compact('buku')); 

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        if(!empty($request->cover)){
            $fileName = 'cover-'.$request->id.'.'.$request->cover->extension();
            //$fileName = $request->foto->getClientOriginalName();
            $request->cover->move(public_path('admin/image'),$fileName);
        }
        else{
            $fileName = '';
        }

        // update data buku
        DB::table('buku')->where('id', $request->id)->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'harga' => $request->harga,
            'stok' => $request->stok,
            //kategori_id diambil dari idkategori_buku di table kategori_buku
            'kategori_id' => $request->kategori_id,
            //upload cover buku ke folder public/cover
            'cover' => $fileName,
        ]);
        // alihkan halaman ke halaman buku
        return redirect('/admin/buku');

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // menghapus data buku berdasarkan id yang dipilih
        DB::table('buku')->where('id', $id)->delete();
    }
}
