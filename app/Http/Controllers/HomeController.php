<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    

    public function welcomeSystem()
    {
        return view('welcome');
    }

    public function start()
    {
        return view('homeLB');
    }

    public function createEmployee()
    {
        return view('createEmployees');
    }

    // public function blade()
    // {
    //     return view('blade');
    // }
}