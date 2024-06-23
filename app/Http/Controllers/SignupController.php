<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SignupController extends Controller
{
    public function index()
    {
        return view('login.signup');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|min:8|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:3|max:8'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        user::create($validatedData);

        $request->session()->flash('success', 'Registrasi berhasil, silahkan login');

        return redirect('/sigin');
    }
}
