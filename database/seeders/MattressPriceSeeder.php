<?php

namespace Database\Seeders;

use App\Models\Mattress;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MattressPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mattress = Mattress::all();

        foreach($mattress as $value){
            $value->price = rand(650,25000);
            $value->save();
        }
    }
}
