<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            'name' => 'Naufal Mahdi Rahman Ubaid',
            'alamat' => "Perumahan Jember Permai 1, Jl Argopuro III C-4, Kec Sumbersari, Kab Jember",
            'jenis_kelamin' => 1,
            'prodi' => 1,
            'no_hp' => "081217938987"
        ]);
        //
    }
}
