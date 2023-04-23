<?php

namespace App\Http\Controllers;

use App\Http\Controllers;


use App\Models\User;


class UserController extends Controller
{
    public function index()
    {
        $amis = user::select('id', 'name', 'email')->get();
        //dd($amis);
        return view('users', compact('amis'));
    }
};
