<?php

namespace Database\Seeders;

use App\Models\Pendidikanpegawai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PendidikanpegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pendidikanpegawai::create([
            'name' => 'Status Satu'
        ]);
        Pendidikanpegawai::create([
            'name' => 'Status Dua'
        ]);
        Pendidikanpegawai::create([
            'name' => 'Status Tiga'
        ]);
    }
}
