<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'zakaria',
            'password'=>bcrypt('zakaria1234'),
            'email' => 'zakaria@example.com',
        ]);
        \App\Models\Admin::factory()->create([
            'name' => 'Admin ',
            'password'=>bcrypt('admin1234'),

            'email' => 'admin@admin.admin',
        ]);
        \App\Models\Admin::factory()->create([
            'name' => 'taha ',
            'password'=>bcrypt('taha1234'),

            'email' => 'taha@admin.taha',
        ]);
    }
}
