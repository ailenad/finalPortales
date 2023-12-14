<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::factory()->count(5)->create()->each(function ($article){
            $categories = Category::all()->random(rand(1, 3))->pluck('id');
            $article->categories()->attach($categories);
        });
        }
}
