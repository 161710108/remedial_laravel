<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen'; 
    protected $fillable = array('nama','nipd','alamat');

  	public function mahasiswa()
    {
    	return $this->hasMany('App\Mahasiswa','id_dosen');
    }
}
