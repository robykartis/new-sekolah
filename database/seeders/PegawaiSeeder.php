<?php

namespace Database\Seeders;

use App\Models\Pegawai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pegawai::create([
            'nama' => 'Roby',
            'foto_diri' => '123.jpg',
            'nik' => '123123131233123',
            'foto_ktp' => '123.jpg',
            'npwp' => '34123412412',
            'foto_npwp' => '123.jpg',
            'jenis_kelamin' => 'Laki-laki',
            'tanggal_lahir' => now(),
            'agama' => 'Islam',
            'nip' => '153453453',
            'id_pendidikan' => '1',
            'gelar' => 'SKOM',
            'foto_ijazah' => '123.jpg',
            'alamat' => 'Korong Tiram',
            'sts_pernikahan' => 'Sudah Menikah',
            'id_jabatan' => '1',
            'id_status' => '1',
            'tgl_daftar' => now(),
            'email' => 'robykarti.s@gmail.com',
            'telpon' => '4534534534534'
        ]);
    }
}
