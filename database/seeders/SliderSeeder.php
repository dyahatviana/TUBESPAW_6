<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Slider::create([
            'image' => asset('images/slider1.jpeg'),
            'name' => 'Slider1',
            'content' => 'Welcome to our e-commerce site',
            'link' => 'product',
            'status' => '1'
        ]);
    }
}
