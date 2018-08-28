<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FabioController extends Controller
{
    public function index()
    {
        return "hello World!!!";
    }

    public function view()
    {
        return view('hello');
    }
}