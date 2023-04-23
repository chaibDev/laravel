<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $name = 'Chaibdraa';
        return view('test', compact('name'));
    }
    public function show()
    {

        $name = 'Chaibdraa';
        return view('Welcome', ['name' => $name]);
    }
}
