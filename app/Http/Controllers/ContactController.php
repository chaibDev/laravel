<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        $email = 'jD1d9@example.com';
        $tel = '0640433473';
        return view('contact', compact('tel', 'email'));
    }
}
