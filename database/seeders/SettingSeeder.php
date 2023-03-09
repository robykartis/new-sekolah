<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Setting::create([
            'name' => 'SDN 05 TIRAM',
            'logo' => '123.jpg',
            'address' => 'KORONG TIRAM',
            'email' => 'sdn05tiram@gmail.com',
            'telpon' => '082386825834'
        ]);
    }
}
