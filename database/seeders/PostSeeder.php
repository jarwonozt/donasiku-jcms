<?php

namespace Database\Seeders;

use App\Models\Post;
use Exception;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        try {
            for ($i = 0; $i < 20; $i++) {
                Post::create([
                    'title' => fake()->sentence,
                    'slug' => fake()->slug,
                    'category_id' => fake()->numberBetween(1, 15),
                    'preview' => fake()->paragraph,
                    'content' => fake()->text,
                    'image' => fake()->imageUrl(),
                    'status' => fake()->randomElement(['active', 'inactive', 'pending']),
                    'created_by' => fake()->numberBetween(1, 11),
                    'edited_by' => fake()->numberBetween(1, 11),
                    'created_at' => fake()->dateTimeBetween('-1 year', 'now'),
                    'updated_at' => now()
                ]);
            }
        }catch (Exception $e) {
            DB::rollBack();
            echo $e->getMessage();
        }

    }
}
