<?php

namespace App\Http\Controllers;

use App\Models\Template;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.home')->with('templates', Template::all());
    }
}
