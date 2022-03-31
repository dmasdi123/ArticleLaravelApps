<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    public function index() {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|unique:users',
            'email' => 'required|email:dns|unique:users',
            // 'password' => [ 'required', Password::min(8)->mixedCase()->letters()->numbers()->symbols()->uncompromised()],
            'password' => 'required|max:10'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        // dd('berhasil');
        User::create($validatedData);

        // $request->session()->flash('success', 'Registration Successfully!');

        return redirect('/login')->with('success', 'Registration Successfully!');
    }
}
