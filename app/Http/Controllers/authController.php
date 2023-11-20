<?php

namespace App\Http\Controllers;


use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{

    public function show(): View
    {
        $bunga = User::all();
        return view("admin.login", compact("bunga"));
    }

    public function login(Request $request)
    {

        $request->validate([
            'nama'=> 'required',
            'password' => 'required',
        ]);

        $succeslogin = auth::attempt([
            'nama' => $request->nama,
            'password' => $request->password
        ]);
        
        if ($succeslogin) {
            return redirect()->route('tambah')->with('success', 'Login berhasil');
        } else {
            return back()->with('error','Nama Atau Password Salah');
        }
        
    }
}