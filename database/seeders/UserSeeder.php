<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'first_name' => 'admin',
                'last_name' => 'admin',
                'email' => 'admin@yopmail.com',
                'password' => Hash::make('12345678'),
                'user_type' => 'admin',
                'website' => 'https://portal.artistreplugged.com/',
                'status' => 'approved',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'first_name' => 'John',
                'last_name' => 'doe',
                'email' => 'john@yopmail.com',
                'password' => Hash::make('12345678'),
                'user_type' => 'filmmaker',
                'website' => 'https://portal.artistreplugged.com/',
                'status' => 'unapproved',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'first_name' => 'artist',
                'last_name' => 'art',
                'email' => 'artist@yopmail.com',
                'password' => Hash::make('12345678'),
                'user_type' => 'artist',
                'website' => 'https://portal.artistreplugged.com/',
                'status' => 'unapproved',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ];
        User::insert($users);
    }
}
