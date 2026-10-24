<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); // Retrieve records via Eloquent[cite: 8]

        return view('users', compact('users'));
    }
}