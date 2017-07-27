<?php

use Illuminate\Database\Seeder;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = [
        ['Nama'=>'Neng Witri Maryani','JK'=>'Perempuan','Sekolah'=>'SMK Assalaam Bandung'],
        ['Nama'=>'Silvani','JK'=>'Perempuan','Sekolah'=>'SMK Assalaam Bandung'],
        ['Nama'=>'Sulis','JK'=>'Perempuan','Sekolah'=>'SMK Assalaam Bandung'],
        ['Nama'=>'Rahmad','JK'=>'Laki - Laki','Sekolah'=>'SMK Assalaam Bandung'],
        ['Nama'=>'Sodikin','JK'=>'Laki - Laki','Sekolah'=>'SMK Assalaam Bandung']
        ];
        DB::table('Siswa')->insert($a);
    }
}
