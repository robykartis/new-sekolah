<?php

namespace Database\Seeders;

use App\Models\Statuspegawai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatuspegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Statuspegawai::create([
            'name' => 'Status Satu'
        ]);
        Statuspegawai::create([
            'name' => 'Status Dua'
        ]);
        Statuspegawai::create([
            'name' => 'Status Tiga'
        ]);
    }
}
