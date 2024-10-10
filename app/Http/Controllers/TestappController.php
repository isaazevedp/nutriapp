<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestappController extends Controller
{
    public function inicio(){
        return view('html');
    }
}
