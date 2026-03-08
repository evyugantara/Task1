<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StylingController extends Controller
{
    public function index(){
        return view('styling');
    }
}
