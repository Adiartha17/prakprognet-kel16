<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $data = array('title' => 'Home');
        return view('homepage.landing', $data);
    }
}