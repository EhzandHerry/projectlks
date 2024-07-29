<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LksController extends Controller
{
    public function dashboard()
    {
        return view('lks.dashboard');
    }
}
