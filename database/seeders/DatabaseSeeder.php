<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Insert Admin & User
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Regular User',
                'email' => 'user@example.com',
                'password' => Hash::make('password'),
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Insert Phones
        DB::table('phones')->insert([
            [
                'name' => 'iPhone 15 Pro',
                'brand' => 'Apple',
                'price' => 1299.00,
                'description' => 'Latest iPhone with A17 Pro chip and titanium frame.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Galaxy S24 Ultra',
                'brand' => 'Samsung',
                'price' => 1199.00,
                'description' => 'Flagship Samsung with Snapdragon Gen 3 and S Pen.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pixel 8 Pro',
                'brand' => 'Google',
                'price' => 999.00,
                'description' => 'Google Pixel with Tensor G3 and advanced AI features.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'OnePlus 12',
                'brand' => 'OnePlus',
                'price' => 899.00,
                'description' => 'Fast and smooth experience with Snapdragon 8 Gen 3.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Insert Transactions
        DB::table('transactions')->insert([
            [
                'user_id' => 2, // Regular User
                'phone_id' => 1, // iPhone 15 Pro
                'quantity' => 1,
                'total' => 1299.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2, // Regular User
                'phone_id' => 3, // Pixel 8 Pro
                'quantity' => 2,
                'total' => 1998.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
