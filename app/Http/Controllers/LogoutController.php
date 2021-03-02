<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LogoutController extends Controller
{
    public function store()
    {
        auth()->logout();
        // dd('hello');
        return redirect()->route('register');
    }
}
