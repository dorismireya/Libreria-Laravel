<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function inicio(){
    	return view('index');
    }

    public function inicioAdmin(){
    	return view('plantillas.inicio');
    }
}
