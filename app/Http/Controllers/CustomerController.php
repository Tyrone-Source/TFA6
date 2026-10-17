<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            ['id' => 1, 'name' => 'Alice Johnson', 'email' => 'alice@example.com', 'phone' => '555-0101'],
            ['id' => 2, 'name' => 'Bob Smith', 'email' => 'bob@example.com', 'phone' => '555-0102'],
            ['id' => 3, 'name' => 'Charlie Brown', 'email' => 'charlie@example.com', 'phone' => '555-0103'],
            ['id' => 4, 'name' => 'Diana Prince', 'email' => 'diana@example.com', 'phone' => '555-0104'],
            ['id' => 5, 'name' => 'Ethan Hunt', 'email' => 'ethan@example.com', 'phone' => '555-0105'],
        ];

        return view('customers', compact('customers'));
    }
}