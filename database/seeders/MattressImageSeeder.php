<?php

namespace Database\Seeders;

use App\Models\Mattress;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MattressImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $imageFiles = [
            'mattresses/mattress1.jpg',
            'mattresses/mattress2.jpg',
            'mattresses/mattress3.jpg',
        ];

        $mattresses = Mattress::all();
        $index = 0;

        foreach ($mattresses as $mattress) {
            $mattress->image_path = $imageFiles[$index % count($imageFiles)];
            $mattress->save();
            $index++;
        }
    }
}
