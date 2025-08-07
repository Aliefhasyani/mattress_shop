<?php

namespace Database\Seeders;

use App\Models\Mattress;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddDescMattress extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $descriptions = [
            'A premium mattress designed for ultimate comfort and deep sleep.',
            'Crafted with ultra-soft memory foam for a cloud-like experience.',
            'Engineered for back support with orthopedic features.',
            'Eco-friendly materials and breathable fabric for healthy rest.',
            'Perfect balance of softness and support for all sleepers.',
            'Luxury mattress with advanced pressure-relief technology.',
            'Cooling gel layers to regulate temperature all night long.',
            'Firm support with a plush top layer for maximum relaxation.',
            'Hybrid design combining springs and foam for durability.',
            'Elegant design with ergonomic contours for body alignment.',
        ];

        
        $mattresses = Mattress::all();
        $index = 0;

        foreach ($mattresses as $mattress) {
            $mattress->desc = $descriptions[$index % count($descriptions)];
            $mattress->save();
            $index++;
        }

    }
}
