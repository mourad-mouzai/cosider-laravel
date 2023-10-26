<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subscriber;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        Subscriber::factory(20)->create();

        // Subscriber::factory()->create([
        //     'email' => 'mourad@example.com',
        // ]);

        // User::factory()->create([
        //     'name' => 'mourad',
        //     'email' => 'mourad@gmail.com',
        //     'password' => '123456'
        // ]);
    }
}
