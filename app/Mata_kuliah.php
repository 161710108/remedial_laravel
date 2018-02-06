<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mata_kuliah extends Model
{
    protected $table = 'mata_kuliah';
    protected $fillable = array('nama_matkul','kkm');

        public function mahasiswa()
    {
    	return $this->belongsToMany('App\Mahasiswa','matkul_mahasiswa','id_matkul','id_mahasiswa');
    }
}
