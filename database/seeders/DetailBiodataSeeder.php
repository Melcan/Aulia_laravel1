<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailBiodataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        // insert data ke tabel 
        DB::table('biodata')->insert([
           'nim' => 'E41221789',
           'nama_mhs' => 'Shila ',
           'prodi_mhs' => 'Teknik Informatika',
           'address' => 'Jember',
           'no_telp' => '0895393799943',
           'tgl_lahir' => '20030712'
          
        ]);
    }
}
