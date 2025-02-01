<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'role' => 'admin',
            'password' => '1234567890'
        ]);
        User::factory()->create([
            'name' => 'user',
            'email' => 'user@example.com',
            'role' => 'user',
            'password' => '1234567890'
        ]);
        User::factory()->create([
            'name' => 'wiwi',
            'email' => 'riski@example.com',
            'role' => 'user',
            'password' => '1234567890'
        ]);
        $this->call(UserChirpSeeder::class);
    }
}
