<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Youssef Amjad',
            'email' => 'ZY1YOGI@admin.com',
            'password' => bcrypt('012369510'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);

        \App\Models\User::create([
            'name' => 'Ahmad',
            'email' => 'ahmad@admin.com',
            'password' => bcrypt('admin0ahmad'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);


        // \App\Models\Category::create([
        //     'name' => 'Mountains',
        //     'slug' => 'mountains',
        //     'description' => fake()->text(35),
        //     'seo_keywords' => "tag1,tag2,tag3,tags",
        // ]);
    }
}
