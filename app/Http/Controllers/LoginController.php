<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login', [
            'title'=>'Login'
        ]);
    }

    public function auth(Request $request)
    {
        $data = $request->validate([
            'username'=>'required|min:5|max:100',
            'password'=>'required'
        ]);

        if(Auth::attempt($data)){
            return redirect('/books');
        }

        return back()->with('failed', 'Login Gagal !');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
