<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Roby Karti S',
            'email' => 'administrator@email.com',
            'password' => Hash::make('12341234'),
            'role' => 'administrator',
            'foto' => '123.jpg'
        ]);
        User::create([
            'name' => 'Kepala Sekolah',
            'email' => 'kepala_sekolah@email.com',
            'password' => Hash::make('12341234'),
            'role' => 'kepala_sekolah',
            'foto' => '123.jpg'
        ]);
        User::create([
            'name' => 'Staff Sekolah',
            'email' => 'staff_sekolah@email.com',
            'password' => Hash::make('12341234'),
            'role' => 'staff_sekolah',
            'foto' => '123.jpg'
        ]);
        User::create([
            'name' => 'Guru Sekolah',
            'email' => 'guru_sekolah@email.com',
            'password' => Hash::make('12341234'),
            'role' => 'guru_sekolah',
            'foto' => '123.jpg'
        ]);
        User::create([
            'name' => 'Orangtua Siswa',
            'email' => 'orangtua_siswa@email.com',
            'password' => Hash::make('12341234'),
            'role' => 'orangtua_siswa',
            'foto' => '123.jpg'
        ]);
        User::create([
            'name' => 'Siswa',
            'email' => 'siswa@email.com',
            'password' => Hash::make('12341234'),
            'role' => 'siswa',
            'foto' => '123.jpg'
        ]);
    }
}
