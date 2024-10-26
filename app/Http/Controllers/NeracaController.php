<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NeracaController extends Controller
{
    //
    public function neraca() {
        return view('page.neraca.neraca');
    }
}
