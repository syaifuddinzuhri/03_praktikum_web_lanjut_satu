<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'About Us',
            'message' => 'Ini Halaman About Us'
        ];
        return view('about-us', compact('data'));
    }
}