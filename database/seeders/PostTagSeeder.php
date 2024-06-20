<?php

namespace Database\Seeders;

use App\Models\PostTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 20; $i++) {
            PostTag::create([
                'post_tag_id' => fake()->numberBetween(1, 20),
                'tag_id' => fake()->numberBetween(1, 25),
            ]);
        }
    }
}
