<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function login() 
    {
        return view('account/login', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }
        
        return back()->with('loginError', 'Login failed!');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('account/login');
    }

    public function register()
    {
        return view('account/register', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        // menampilkan hasil request
        // return $request->all();

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'], // usernmae harus unik dalam tabel users
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255' 
        ]);

        // kode di bawah ini akan dijalankan apabila validasi di atas berhasil
        // dd($request);

        // keduanya sama menggunakan bcrypt
        // $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);

        $request->session()->flash('success', 'Registration success! Please login');

        return redirect('login');
    }
}
