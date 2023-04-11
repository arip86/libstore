<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use App\Models\kategoriBuku;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    //arahkan ke halaman home
    public function index()
    {
        //panggil table buku dan kategori buku
        $buku = Buku::all();
        $kategori_buku = kategoriBuku::all();
        return view('front', compact('buku', 'kategori_buku'));

    }
    public function about()
    {
        return view('about');
    }
    public function search(Request $request){
        $cari = $request->cari;
        $buku = Buku::where('judul', 'like', "%".$cari."%")->get();
        $kategori_buku = kategoriBuku::all();
        return view('front', compact('buku', 'kategori_buku'));
    }
    //buat fungsi menyimpan data di cart 
    public function addCart($id)
    {
        $buku = Buku::find($id);
        if(!$buku) {
            abort(404);
        }
        $cart = session()->get('cart');
        //jika cart kosong maka buat array cart
        if(!$cart) {
            $cart = [
                    $id => [
                        "judul" => $buku->judul,
                        "jumlah" => 1,
                        "harga" => $buku->harga,
                        "gambar" => $buku->gambar
                    ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Produk berhasil ditambahkan');
        }
        //jika cart tidak kosong maka cek apakah produk sudah ada di cart
        if(isset($cart[$id])) {
            $cart[$id]['jumlah']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Produk berhasil ditambahkan');
        }
        //jika item tidak ada di cart maka tambahkan item baru
        $cart[$id] = [
            "judul" => $buku->judul,
            "jumlah" => 1,
            "harga" => $buku->harga,
            "gambar" => $buku->gambar
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Produk berhasil ditambahkan');
    }
    
}

