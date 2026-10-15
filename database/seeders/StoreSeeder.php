<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Store;

class StoreSeeder extends Seeder
{
    public function run(): void
    {
        Store::create([
            'name' => 'KOPIKA Ketintang',
            'address' => 'Jl. Ketintang No. 10, Surabaya',
            'opening_hours' => '08.00 - 22.00 WIB',
            'phone' => '+62 812-0000-0000',
            'latitude' => -7.3115,
            'longitude' => 112.7295,
        ]);

        Store::create([
            'name' => 'KOPIKA Lidah Wetan',
            'address' => 'Jl. Lidah Wetan, Surabaya',
            'opening_hours' => '09.00 - 22.00 WIB',
            'phone' => '+62 812-1111-1111',
            'latitude' => -7.3000,
            'longitude' => 112.6750,
        ]);
    }
}