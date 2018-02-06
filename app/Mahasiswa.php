<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table =  'mahasiswa' ;

    protected $fillable = array('nama','nis','id_dosen','id_jurusan');

    public function wali()
    {
    	return $this->hasOne('App\Wali','id_mahasiswa');
    }
        public function dosen()
    {
    	return $this->belongsTo('App\Dosen','id_dosen');
    }
        public function jurusan()
    {
    	return $this->belongsTo('App\Jurusan','id_jurusan');
    }
        public function mata_kuliah()
    {
    	return $this->belongsToMany('App\Mata_kuliah','matkul_mahasiswa','id_mahasiswa','id_mapel');
    }
}
