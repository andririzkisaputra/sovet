<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class LandingController extends Controller
{
    public function home()
    {
        return view('landing-pages.home');
    }

    public function about()
    {
        return view('landing-pages.about');
    }

    public function contact()
    {
        return view('landing-pages.contact');
    }
}
