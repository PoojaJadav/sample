<?php

namespace Database\Seeders;

use App\Models\Flight;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create(['email' => 'john@example.com']);
        Post::factory(10)->create();
        Flight::factory(10)->create();
    }
}
