<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vendor;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vendor::create([
            'vendor_name' => 'mas roy',
            'vendor_phone_num' => '123098',
            'vendor_adress' => 'asdasd',
        ]);
        Vendor::create([
            'vendor_name' => 'mbak rara',
            'vendor_phone_num' => '123098',
            'vendor_adress' => 'asdasd',
        ]);
        Vendor::create([
            'vendor_name' => 'mas faiz',
            'vendor_phone_num' => '123098',
            'vendor_adress' => 'asdasd',
        ]);
    }
}
