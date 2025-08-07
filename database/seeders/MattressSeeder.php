<?php

namespace Database\Seeders;

use App\Models\Mattress;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MattressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mattress::create([
            'name' => 'DreamComfort Deluxe',
            'quantity_in_stock' => 10,
            'company_id' => 1
        ]);

        Mattress::create([
            'name' => 'UltraSoft Serenity',
            'quantity_in_stock' => 8,
            'company_id' => 2
        ]);

        Mattress::create([
            'name' => 'CloudRest Prime',
            'quantity_in_stock' => 15,
            'company_id' => 3
        ]);

        Mattress::create([
            'name' => 'BackCare Ortho',
            'quantity_in_stock' => 5,
            'company_id' => 4
        ]);

        Mattress::create([
            'name' => 'EcoSleep Natural',
            'quantity_in_stock' => 20,
            'company_id' => 5
        ]);

        Mattress::create([
            'name' => 'SpringFlex Supreme',
            'quantity_in_stock' => 7,
            'company_id' => 6
        ]);

        Mattress::create([
            'name' => 'PlushRest Essential',
            'quantity_in_stock' => 12,
            'company_id' => 7
        ]);

        Mattress::create([
            'name' => 'MaxSupport Airflow',
            'quantity_in_stock' => 6,
            'company_id' => 8
        ]);

        Mattress::create([
            'name' => 'ZenSleep Hybrid',
            'quantity_in_stock' => 9,
            'company_id' => 9
        ]);

        Mattress::create([
            'name' => 'RoyalFoam Elite',
            'quantity_in_stock' => 14,
            'company_id' => 10
        ]);
    }
}
