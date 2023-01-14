<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'チーム開発会って？',
            'comment' => 'チョコを作りました',
            'user_id' => '1',
            'handmake'=> "0",
            'price'=> "1000円未満",
            'age'=> "18歳未満",
            'relationship'=> "恋人",
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        
        
             DB::table('posts')->insert([
            'title' => 'チーム開発会って？',
            'comment' => 'チョコを作りました',
            'user_id' => '1',
            'handmake'=> "0",
            'price'=> "1000円未満",
            'age'=> "18歳未満",
            'relationship'=> "恋人",
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('posts')->insert([
            'title' => 'チーム開発会って？',
            'comment' => 'チョコを作りました',
            'user_id' => '1',
            'handmake'=> "0",
            'price'=> "1000円未満",
            'age'=> "18歳未満",
            'relationship'=> "恋人",
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}

