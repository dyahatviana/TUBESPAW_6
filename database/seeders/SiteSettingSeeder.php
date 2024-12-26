<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SiteSetting::create([
            'name' => 'address',
            'data' => "Jl. Ketintang Timur PTT 1 No. 33 , Ketintang, Gayungan, Surabaya"
        ]);

        SiteSetting::create([
            'name' => 'phone',
            'data' => "082457892081"
        ]);

        SiteSetting::create([
            'name' => 'email',
            'data' => "jeaboutique@gmail.com"
        ]);

        SiteSetting::create([
            'name' => 'map',
            'data' => null
        ]);
    }
}
