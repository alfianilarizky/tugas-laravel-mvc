<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function registrasi (){
        return view('form');
    }

    public function handlePost (Request $request){
        $nama = $request['first'];
        return view("welcome", compact($nama));

    }
}
