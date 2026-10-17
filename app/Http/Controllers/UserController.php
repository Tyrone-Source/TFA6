<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            ['id' => 1, 'username' => 'admin_joe', 'role' => 'Administrator', 'status' => 'Active'],
            ['id' => 2, 'username' => 'cashier_sue', 'role' => 'Cashier', 'status' => 'Active'],
            ['id' => 3, 'username' => 'manager_bob', 'role' => 'Manager', 'status' => 'Inactive'],
            ['id' => 4, 'username' => 'staff_amy', 'role' => 'Inventory Staff', 'status' => 'Active'],
            ['id' => 5, 'username' => 'cashier_dan', 'role' => 'Cashier', 'status' => 'Active'],
        ];

        return view('users', compact('users'));
    }
}