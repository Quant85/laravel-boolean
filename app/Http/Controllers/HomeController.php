<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    

    /**
     * "Smista il traffico" da far convogliare in home 
     */

    public function index()
    {
        return view('pages.home');
    }
}
