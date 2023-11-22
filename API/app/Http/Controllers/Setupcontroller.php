<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Setupcontroller extends Controller
{
    public function __invoke()
    {
        return view('layouts.admin');
    }
}
