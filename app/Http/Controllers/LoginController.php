<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function auth(Request $request){
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if(Auth::attempt($credentials)){
            return redirect('siswa');
        }
        return redirect()->back();
    }
}
