<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $articles = [
        //     [
        //         [
        //             'user_id'=> 1,
        //             'title' => 'Article 1',
        //             'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
        //             'category_id' => 1,
        //             'image_path' => '1.png'                    
        //         ]  
        //     ]
        // ];
        // DB::table('articles')->insert($articles);
        Article::factory()->count(20)->create([
            'image_path' => null, // Kosongkan field image_path
        ]);
    }
}
