<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->upsert([
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('adminadmin')

            ]
        ],['email'],['name', 'password']);
    }
}
