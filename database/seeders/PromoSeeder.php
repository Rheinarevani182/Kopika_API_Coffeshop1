<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Promo;

class PromoSeeder extends Seeder
{
    public function run(): void
    {
        Promo::create([
            'title' => 'Buy 1, Get 1 Coffee Date',
            'description' => 'Because good coffee tastes better together.',
            'label' => 'TODAY ONLY',
            'promo_code' => 'KOPIKA2GETHER',
            'discount' => 50,
            'image' => null,
        ]);

        Promo::create([
            'title' => 'Morning Coffee Deal',
            'description' => 'Nikmati kopi favoritmu dengan harga spesial di pagi hari.',
            'label' => 'MORNING DEAL',
            'promo_code' => 'MORNING20',
            'discount' => 20,
            'image' => null,
        ]);

        Promo::create([
            'title' => 'Weekend Sweet Treat',
            'description' => 'Temani akhir pekanmu dengan promo minuman pilihan KOPIKA.',
            'label' => 'WEEKEND',
            'promo_code' => 'SWEET15',
            'discount' => 15,
            'image' => null,
        ]);
    }
}