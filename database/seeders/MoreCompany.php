<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoreCompany extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::create([
            'name' => 'PT. Mega  Digital',
            'company_email' => 'office@digital.co.id',
            'company_phone_number'=> '081311114444',
            'size' => 'medium'
        ]);
    }
}
