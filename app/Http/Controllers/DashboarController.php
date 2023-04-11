<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use App\Models\kategoriBuku;

use App\Models\User;

use Illuminate\Http\Request;

class DashboarController extends Controller
{
    //index dashboard
    public function index()
    {
        $buku = Buku::all();
        $kategori_buku = kategoriBuku::all();
        $user = User::all();
        return view('admin.dashboard', compact('buku', 'kategori_buku', 'user'));
    }
}
