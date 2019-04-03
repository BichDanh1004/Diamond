<?php

use Illuminate\Database\Seeder;
use App\News;
class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        News::create([
            'title' ->title,
            'content' ->content,
            'image' ->image
        ]);
    }
}
