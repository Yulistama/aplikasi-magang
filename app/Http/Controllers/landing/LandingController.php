<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function landing()
    {
        return view('pages.landing.landing');
    }
    
    public function infomagang()
    {
        return view('component.cardInfoMagang');
    }
    
}
