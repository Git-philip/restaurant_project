<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // if (!auth()->user($request->only('email', 'password'))) {
        //     return back()->with('status', 'Invalid login details');
        // }

        // return redirect()->route('dashboard');
        // $credentials = $request->only('email', 'password');

        // $credentials = $request->only('email', 'password');

        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();

        //     return redirect()->intended('/admin/dashboard');
        // }



        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->passwprd,
            'status' => 1
        ])) {
            $request->session()->regenerate();

            return redirect()->intended('/admin/dashboard');
        } elseif (Auth::attempt([
            'email' => $request->email,
            'password' => $request->passwprd,
            'status' => 0
        ])) {
            $request->session()->regenerate();

            return redirect()->intended('/user');
        }


        return back()->with('status', 'Invalid login details');
    }
}
