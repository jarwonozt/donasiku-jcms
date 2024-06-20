<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            'Trending',
            'Tips',
            'How-to',
            'News',
            'Opinion',
            'Review',
            'Tutorial',
            'Lifestyle',
            'Technology',
            'Health',
            'Travel',
            'Food',
            'Fashion',
            'Entertainment',
            'Sports',
            'Business',
            'Education',
            'Finance',
            'DIY',
            'Environment',
            'Science',
            'History',
            'Culture',
            'Parenting',
            'Motivation'
        ];

        foreach ($tags as $tagName) {
            Tag::create([
                'name' => $tagName,
                'slug' => Str::slug($tagName),
            ]);
        }
    }
}
