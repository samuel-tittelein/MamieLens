<?php

namespace Database\Seeders;

use App\Enums\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder {

    public function run(): void {
        User::factory([
            'name' => "Robert Duchmol",
            'email' => "robert.duchmol@domain.fr",
            'email_verified_at' => now(),
            'password' => Hash::make('GrosSecret'),
            'remember_token' => Str::random(10),
            'role' => Role::USER,
        ])->create();
        User::factory([
            'name' => "Gérard Martin",
            'email' => "gerard.martin@domain.fr",
            'email_verified_at' => now(),
            'password' => Hash::make('GrosSecret'),
            'remember_token' => Str::random(10),
            'role' => Role::USER,
        ])->create();
        User::factory([
            'name' => "Sam",
            'email' => "s@tkt.com",
            'email_verified_at' => now(),
            'password' => Hash::make('cacacaca'),
            'remember_token' => Str::random(10),
            'role' => Role::ADMIN,
        ])->create();
        User::factory(3)->create();
    }
}
