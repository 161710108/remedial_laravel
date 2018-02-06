<?php

use Illuminate\Database\Seeder;
use App\Dosen;
use App\Jurusan;
use App\Mahasiswa;
use App\wali;
use App\Mata_kuliah;
class Seeder_Relasi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dosen')->delete();
        DB::table('jurusan')->delete();
        DB::table('mahasiswa')->delete();
        DB::table('wali')->delete();
        DB::table('mata_kuliah')->delete();

        $dosen01 = dosen::create(array(
        	'nama' => 'yulianto','nipd'=>'0001010','alamat'=>'Kp.Ciodeng'
        ));
               $dosen02 = dosen::create(array(
        	'nama' => 'anto','nipd'=>'0002020','alamat'=>'kp.Bojong Koneng'
        ));
               $dosen03 = dosen::create(array(
            'nama' => 'Jujun','nipd'=>'0003030','alamat'=>'kp.Caringin'
        ));

         $this->command->info('Data Dosen sudah diisi!!') ;
         //------------------------------------------------------------
         $rpl = jurusan::create(array(
         	'nama_jurusan'=>'Rekayasa Perangkat Lunak'
         ));
        $tkr = jurusan::create(array(
         	'nama_jurusan'=>'Teknik Kendaraan Ringan'
         ));
        $tsm = jurusan::create(array(
         	'nama_jurusan'=>'Teknik Sepeda Motor'
         ));
        
        $this->command->info('Data Jurusan sudah diisi!!') ;
        //----------------------------------------------------------
        $Fitri = mahasiswa::create(array(
        'nama'=> 'Fitri Nur Sabila','nis'=>'00837','id_dosen'=>$dosen01->id,'id_jurusan'=> $tkr->id
        ));

        $novi = mahasiswa::create(array(
        'nama'=> 'noviyanti','nis'=>'00847','id_dosen'=>$dosen01->id,'id_jurusan'=> $rpl->id
        ));
        $daffa = mahasiswa::create(array(
        'nama'=> 'daffa','nis'=>'00857','id_dosen'=>$dosen01->id,'id_jurusan'=> $tsm->id
        ));
        

        $this->command->info('Data Mahasiswa sudah diisi!!') ;
        //----------------------------------------------------------------
         wali::create(array(
        'nama'=>'Achmad S',
        'alamat'=>'kp.Bahuan',
        'id_mahasiswa'=>$Fitri->id
        ));
        wali::create(array(
        'nama'=>'Warsih',
        'alamat'=>'Rancamanyar',
        'id_mahasiswa'=>$novi->id
        ));
        wali::create(array(
        'nama'=>'Siti Aminah',
        'alamat'=>'kp.Cariu',
        'id_mahasiswa'=>$daffa->id
        ));
                        

	$this->command->info('Data Mahasiswa & Wali sudah diisi!!') ; 
	//------------------------------------------------------------------
	# Tambahkan data mapel
$mp1=mata_kuliah::create(array('nama_matkul'  => 'sejarah','kkm'  => '77'));
$mp2=mata_kuliah::create(array('nama_matkul'  => 'matematika','kkm'  => '78'));

        $novi->mata_kuliah()->attach($mp1->id);
        $daffa->mata_kuliah()->attach($mp2->id);
        $Fitri->mata_kuliah()->attach($mp2->id);
        # Informasi ketika semua nama_matkul telah diisi.
        $this->command->info('nama_matkul dan masiswa telah diisi!');


    }
}


