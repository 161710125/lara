<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $test=[
            ['title'=>'Tips Cepat Mati','content'=>'Lorem Ipsum'],
            ['title'=>'Tips Gampang Hidup','content'=>'Lorem Ipsum'],
            ['title'=>'Apakah Dosa?','content'=>'Lorem Ipsum']
        ];
        DB::table('gems')->insert($test);
    }
}
