<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CitoyenController extends Controller
{
    //
    public function index()
    {
        return view('citoyen.dashboard');
    }
}
