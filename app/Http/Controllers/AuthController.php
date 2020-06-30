<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function regis() {
        return view('register');
    }
    public function welcome(Request $request) {
        $namadepan = $request->input('firstname');
        $namabelakang = $request->input('lastname');
       return view('transisi', compact('namadepan', 'namabelakang'));
    }
}
