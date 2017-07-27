<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
        ['title'=>'Tips Cepat Nikah','content'=>'Loren Ipsum'],
        ['title'=>'Haruskah Menunda Nikah?','content'=>'Loren Ipsum'],
        ['title'=>'Membangun Visi Misi Keluarga','content'=>'Loren Ipsum']
        ];
   
        DB::table('posts')->insert($posts);
    }
}
