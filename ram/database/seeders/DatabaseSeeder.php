<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call(MovieSeeder::class);

        \App\Models\Movie::factory(20)->create();
        \App\Models\Genre::factory(5)->create();
        // php artisan migrate
        // php artisan db:seed class=MovieSeeder

        Tag::create(['value' => 'hollywood']);
        Tag::create(['value' => 'love']);
        Tag::create(['value' => 'photography']);
        Tag::create(['value' => 'fashion']);
        Tag::create(['value' => 'music']);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
