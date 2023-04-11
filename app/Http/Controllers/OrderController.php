<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Buku;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //buat index order relasi dengan table buku
        $order = Order::join('buku', 'order.book_idbook', '=', 'buku.id')
            ->select('order.*', 'buku.judul')
            ->get();
        return view('order', compact('order'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //arahkan ke view form 
        return view('order');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // tambahkan data ke table order
        Order::create([
            'book_idbook' => $request->book_idbook,
            'jumlah' => $request->jumlah,
            'total' => $request->total,
            'status' => $request->status,
        ]);
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
