<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $about = AboutUs::first();
        // dd($about);
        return view('welcome', compact('about'));
    }
}
