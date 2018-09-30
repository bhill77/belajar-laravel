<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HaloController extends Controller
{
    public function index ()
    {
        $a = 10;
        $b = 15;
        $users = [1,2,3];
        return view('halo', ['nama' => 'Danu', 'total' => $a + $b, 'users' => $users]);
    }
}
