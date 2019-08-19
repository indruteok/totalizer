<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TotalizerController extends Controller
{
     public function index()
    {
        return view('front.totalizer');
    }
}
