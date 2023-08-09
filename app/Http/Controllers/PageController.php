<?php

namespace App\Http\Controllers;


class PageController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function list_rooms()
    {
        return view('pages.list-rooms');
    }
}
