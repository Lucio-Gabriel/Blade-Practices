<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function livewire()
    {
        return view('homeLivewire');
    }

    public function blade()
    {
        return view('blade');
    }
}