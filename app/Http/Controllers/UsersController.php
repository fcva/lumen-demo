<?php

namespace App\Http\Controllers;

use App\User;

class UsersController extends Controller
{
    public function index()
    {   
        $users = User::get();

        return view('users.index', compact('users'));
    }
}