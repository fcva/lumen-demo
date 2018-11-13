<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {   
        $users = User::orderBy('id', 'DESC')->get();

        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {      
        $request->request->add([
            'password' => bcrypt($request->input('password'))
        ]);

        User::create($request->all());

        return redirect()->route('users.index');
    }
}