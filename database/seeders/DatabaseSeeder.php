<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'User', 
            'email' => 'user@gmail.com', 
            'password' => Hash::make('12345678'),
            'created_at' => NOW(), 
            'updated_at' => NOW()
        ]);
    }
}