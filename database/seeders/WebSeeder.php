<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('company')->insert([
            [
                'name' => 'DreamComfort Inc.',
                'company_email' => 'contact@dreamcomfort.com',
                'company_phone_number' => '+62 812 3456 7890',
                'size' => 'medium',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'SleepWell Co.',
                'company_email' => 'info@sleepwell.com',
                'company_phone_number' => '+62 813 9876 5432',
                'size' => 'small',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'EcoSleep Ltd.',
                'company_email' => 'support@ecosleep.com',
                'company_phone_number' => '+62 811 2233 4455',
                'size' => 'startup',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
