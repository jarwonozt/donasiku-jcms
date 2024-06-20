<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'Jarwonozt',
            'username' => 'jarwonozt',
            'email' => 'jarwonozt@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('cdaaptnia'),
            'two_factor_secret' => null,
            'two_factor_recovery_codes' => null,
            'remember_token' => Str::random(10),
            'image' => null,
            'current_team_id' => null,
            'status' => 'active'
        ]);

        $user->assignRole('admin');

    }
}
