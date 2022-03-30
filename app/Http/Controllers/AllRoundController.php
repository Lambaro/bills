<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllRoundController extends Controller
{
    public function about(){
        return view('about');
    }
}
