<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Customer::insert([
            ['full_name' => 'Alice Johnson', 'email' => 'alice@example.com', 'phone' => '555-0101', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Bob Smith', 'email' => 'bob@example.com', 'phone' => '555-0102', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Charlie Brown', 'email' => 'charlie@example.com', 'phone' => '555-0103', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Diana Prince', 'email' => 'diana@example.com', 'phone' => '555-0104', 'created_at' => now(), 'updated_at' => now()],
            ['full_name' => 'Ethan Hunt', 'email' => 'ethan@example.com', 'phone' => '555-0105', 'created_at' => now(), 'updated_at' => now()],
        ]);

        User::insert([
            ['username' => 'admin_joe', 'full_name' => 'Joe Administrator', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'cashier_sue', 'full_name' => 'Sue Cashier', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'manager_bob', 'full_name' => 'Bob Manager', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'staff_amy', 'full_name' => 'Amy Staff', 'created_at' => now(), 'updated_at' => now()],
            ['username' => 'cashier_dan', 'full_name' => 'Dan Cashier', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}