<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name"=> "Hanif",
            "email"=> "hanif123.ramadhan@gmail.com",
            "role"=> "admin",
            "status"=> "active",
            "password"=> bcrypt("admin")
        ]);
        User::create([
            "name"=> "John Doe",
            "email"=> "john.doe@example.com",
            "role"=> "staff",
            "status"=> "active",
            "password"=> bcrypt("staff")
        ]);
        User::create([
            "name"=> "Melinda",
            "email"=> "melinda@example.com",
            "role"=> "customer",
            "status"=> "active",
            "password"=> bcrypt("customer")
        ]);
    }
}
