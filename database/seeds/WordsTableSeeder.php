<?php

use Illuminate\Database\Seeder;

class WordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //追加する要素の作成
        DB::table('words')->insert([
            'words' => 'at first',
            'meanings' => 'はじめての',
            'category' => '英文法'
        ]);
    }
}
