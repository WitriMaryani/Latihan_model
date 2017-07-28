<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    //
    protected $table = 'Siswa';
    protected $fillable = ['Nama','JK','Sekolah'];
    protected $visible = ['Nama','JK','Sekolah'];
    public $timestamps = true;
}
