<?php

use Illuminate\Database\Seeder;

class MemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = [
        ['nama'=>'Do Kyungsoo','jk'=>'Laki - Laki'],
        ['nama'=>'Chanyeol','jk'=>'Laki - Laki'],
        ['nama'=>'sehun','jk'=>'Laki - Laki'],
        ['nama'=>'Baekhyun','jk'=>'Laki - Laki'],
        ['nama'=>'Suho','jk'=>'Laki - Laki'],
        ['nama'=>'Kai','jk'=>'Laki - Laki'],
        ['nama'=>'Lay','jk'=>'Laki - Laki'],
        ['nama'=>'Xiumin','jk'=>'Laki - Laki']
        ];
        DB::table('Member')->insert($a);
    }
}
