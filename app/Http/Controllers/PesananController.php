<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Buku;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //panggil data order yang sudah di join dengan table buku dan user
        
        $order = Order::join('buku', 'order.book_idbook', '=', 'buku.id')
            ->select('order.*', 'buku.judul')
            ->get();
        //panggil view pesanan
        return view('admin.pesanan.index', compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     //arahkan ke view tambah pesanan
        return view('admin.pesanan.create_pesanan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
