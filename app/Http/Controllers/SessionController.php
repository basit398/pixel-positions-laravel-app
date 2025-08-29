<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Validation\ValidationException;

class   SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }
    public function store()
    {
        //validate
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        //ATTEMPT TO LOGIN USER

        if (!Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Sorry those credentials dont match.'
            ]);
        }

        // regenrate the session token
        request()->session()->regenerate();

        // redirect
        return redirect('/ ');
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
