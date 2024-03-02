<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function bali()
    {
        return view('paket.bali');
    }
}