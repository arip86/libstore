<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //jika dia role admin arahkan ke halaman dashboard admin
        //jika dia role pelangga arahkan ke halaman home
        if(auth()->user()->role == 'admin'){
            return redirect('/admin/dashboard');
        }else{
            return redirect('/');
        }
    }
}
