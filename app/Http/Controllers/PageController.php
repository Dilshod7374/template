<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function tours()
    {
        return view('pages.tours');
    }

    public function types()
    {
        return view('pages.types');
    }

    public function relocation()
    {
        return view('pages.relocations');
    }

    public function reviews()
    {
        return view('pages.reviews');
    }

    public function blog()
    {
        return view('pages.blogs');
    }

    public function order()
    {
        return view('pages.orders');
    }
}
