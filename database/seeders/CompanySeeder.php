<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
    Company::create([
        'name' => 'PT. Ari Jaya',
        'company_email' => 'arijayacomp@gmail.com',
        'company_phone_number'=> '0811223344',
        'size' => 'small'
    ]);

    Company::create([
        'name' => 'CV. Bintang Teknologi',
        'company_email' => 'info@bintangtech.co.id',
        'company_phone_number'=> '081234567890',
        'size' => 'startup'
    ]);

    Company::create([
        'name' => 'PT. Mandiri Solusi Digital',
        'company_email' => 'contact@mandirisolusi.com',
        'company_phone_number'=> '082233445566',
        'size' => 'medium'
    ]);

    Company::create([
        'name' => 'PT. Global Mega Corp',
        'company_email' => 'corp@globalmega.com',
        'company_phone_number'=> '085511223344',
        'size' => 'big'
    ]);

    Company::create([
        'name' => 'StartupInovasi.ID',
        'company_email' => 'hello@startupinovasi.id',
        'company_phone_number'=> '089900112233',
        'size' => 'startup'
    ]);

    Company::create([
    'name' => 'PT. Satu Visi Nusantara',
    'company_email' => 'info@satuvisi.co.id',
    'company_phone_number'=> '082187654321',
    'size' => 'medium'
    ]);

    Company::create([
        'name' => 'CV. Kreasi Mandiri',
        'company_email' => 'kreasi@mandiri.co.id',
        'company_phone_number'=> '081398765432',
        'size' => 'small'
    ]);

    Company::create([
        'name' => 'PT. Solusi Data Utama',
        'company_email' => 'support@solusidata.id',
        'company_phone_number'=> '087712345678',
        'size' => 'big'
    ]);

    Company::create([
        'name' => 'Inovtek Studio',
        'company_email' => 'admin@inovtekstudio.com',
        'company_phone_number'=> '085700112233',
        'size' => 'startup'
    ]);

    Company::create([
        'name' => 'PT. Mega Integrasi Digital',
        'company_email' => 'office@megaindigital.co.id',
        'company_phone_number'=> '081311114444',
        'size' => 'big'
    ]);

    }
}
