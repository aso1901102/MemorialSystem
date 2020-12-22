<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //追加する要素の作成
        DB::table('users')->insert([
            'name' => 'aaaaaaaaaa',
            'email' => str_random(10).'@gmail.com',
            'password' => 'aaaaaaaaaa'
        ]);
    }
}
