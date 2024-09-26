<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function home()
    {
        return view('layouts.frontend.home.index');
    }
}
