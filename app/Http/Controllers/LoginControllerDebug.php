<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login() {
        return view('login');
    } 

    public function register(){
        return view('register');
    }

    public function simpanRegistrasi(Request $request){

        dd($request->all());

        User::create([
            'name' => $request->namapengguna,
            'email' => $request->emailpengguna,
            'password' => bcrypt($request->passwordpengguna),

        ]);

        return redirect ('login');
    }
}
