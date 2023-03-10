<?php

namespace Database\Seeders;

use App\Models\Jabatanpegawai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JabatanpegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jabatanpegawai::create([
            'name' => 'Jabatan Satu'
        ]);
        Jabatanpegawai::create([
            'name' => 'Jabatan Dua'
        ]);
        Jabatanpegawai::create([
            'name' => 'Jabatan Tiga'
        ]);
    }
}
