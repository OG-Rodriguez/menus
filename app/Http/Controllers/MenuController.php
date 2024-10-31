<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function home() {
        return view('home', ['active' => 'home']);
    }

    public function photos() {
        return view('photos', ['active' => 'photos']);
    }

    public function contact() {
        return view('contact', ['active' => 'contact']);
    }
}
