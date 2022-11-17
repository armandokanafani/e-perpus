<?php

use Illuminate\Database\Seeder;

class AnggotasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Anggota::insert([
            [
              'id'  			=> 1,
              'user_id'  		=> 1,
              'npm'				=> 195150607111001,
              'nama' 			=> 'Admin V1',
              'tempat_lahir'	=> 'Malang',
              'tgl_lahir'		=> '2000-01-01',
              'jk'				=> 'L',
              'prodi'			=> 'PTI',
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
            [
              'id'  			=> 2,
              'user_id'  		=> 2,
              'npm'				=> 205150607111001,
              'nama' 			=> 'User V1',
              'tempat_lahir'	=> 'Malang',
              'tgl_lahir'		=> '2001-01-01',
              'jk'				=> 'L',
              'prodi'			=> 'PTI',
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
        ]);
    }
}
