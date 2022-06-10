<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index() {
        return view('landing.landing');
    }

    public function about() {
        return view('landing.about-us');
    }
    
    public function services() {
        return view('landing.our-services');
    }
    
    public function contact() {
        return view('landing.contact-us');
    }
}
