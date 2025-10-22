<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        if (!\App\Models\User::where('email', 'admin@ehb.be')->exists()) {
            \App\Models\User::create([
                'name' => 'admin',
                'email' => 'admin@ehb.be',
                'password' => bcrypt('Password!321'),
                'is_admin' => true,
            ]);

    }
}
