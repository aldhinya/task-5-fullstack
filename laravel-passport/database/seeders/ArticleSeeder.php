<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create([
            'title' => 'Kasus Corona Menurun',
            'content' => 'Isi Kasus Corona Menurun',
            'image' => '-',
            'user_id' => 1,
            'category_id' => 1,
        ]);
    }
}
