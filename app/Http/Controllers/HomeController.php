<?php

namespace App\Http\Controllers;

use App\Models\SpaceModel;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }
}