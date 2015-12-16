<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ControllerLink extends Controller
{
    public function linkHome(){
        return view('home');
    }
    public function linkLogin(){
        return view('login');
    }
    public function linkGerente()
    {
        return view('sistema.gerente');
    }
}
