<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $faker = Faker::create();

       for ($i = 0; $i < 100; $i++) {
           User::query()->create([
              'name' => $faker->name,
              'email' => $faker->unique()->safeEmail,
              'email_verified_at' => now(),
              'password' => Hash::make('password123'),
              'remember_token' => Str::random(10),
              'is_active' => $faker->randomElement([true, false]),
           ]);
       }
    }
}
