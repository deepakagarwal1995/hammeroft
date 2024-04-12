<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitorsController extends Controller
{
    public function index()
    {
        $title = 'Hammer of Thor Tablet Online at Best Prices | Ayurvedic Medicine for Mens Health';
        $descr = 'Hammer of Thor Gold Tablet Price - Hammer of Thor T is the best ayurvedic medicine for Mens Health to improve stamina. Buy Hammer of Thor Tablet Online today!';
        $img = 'hammer-of-thor-white-150x150.webp';
        return view('visitors.index', compact('title', 'descr', 'img'));
    }
    // public function index()
    // {
    //     $items = Gallery::skip(0)->take(10)->latest()->get();
    //     $title = 'Home';
    //     return view('visitors.index', compact('items', 'title'));
    // }
}
