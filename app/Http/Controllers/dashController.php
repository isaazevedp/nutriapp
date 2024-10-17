<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashController extends Controller
{
    public function dash(){
        return view('dashboard');
    }
}
