<?php

use Illuminate\Database\Seeder;

class PostCatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_post')->delete();
        DB::table('category_post')->insert([
            'category_id' => '1',
            'post_id' => '1',
        ]);
        DB::table('category_post')->insert([
            'category_id' => '1',
            'post_id' => '2',
        ]);
        DB::table('category_post')->insert([
            'category_id' => '1',
            'post_id' => '3',
        ]);
        DB::table('category_post')->insert([
            'category_id' => '2',
            'post_id' => '4',
        ]);
        DB::table('category_post')->insert([
            'category_id' => '2',
            'post_id' => '5',
        ]);
        DB::table('category_post')->insert([
            'category_id' => '2',
            'post_id' => '6',
        ]);
        DB::table('category_post')->insert([
            'category_id' => '1',
            'post_id' => '4',
        ]);
        DB::table('category_post')->insert([
            'category_id' => '2',
            'post_id' => '2',
        ]);

    }
}
