<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    //tampilkan data user
    public function index()
    {
        $user = User::all();
        return view('admin.user.user', compact('user'));
    }
    //tampilkan show user
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.user.show_user', compact('user'));
    }
}
