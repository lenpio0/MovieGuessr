<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory(5)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.admin',
            'password' => Hash::make('adminadmin'),
            'is_admin' => true,
        ]);
        $this->call([
            MovieSeeder::class,
        ]);
    }
}
