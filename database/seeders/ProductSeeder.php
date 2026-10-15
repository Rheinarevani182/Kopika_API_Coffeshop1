<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Cafe Latte',
            'category' => 'Coffee',
            'description' => 'Espresso lembut berpadu susu creamy dengan rasa seimbang untuk menemani hari.',
            'price' => 25000,
            'rating' => 4.8,
            'image' => 'assets/images/drinks/cafe_latte.jpg',
        ]);

        Product::create([
            'name' => 'Cappuccino',
            'category' => 'Coffee',
            'description' => 'Espresso dengan steamed milk dan foam lembut yang creamy.',
            'price' => 28000,
            'rating' => 4.9,
            'image' => 'assets/images/drinks/cappuccino.jpg',
        ]);

        Product::create([
            'name' => 'Americano',
            'category' => 'Coffee',
            'description' => 'Espresso dan air dengan karakter kopi yang clean dan bold.',
            'price' => 22000,
            'rating' => 4.7,
            'image' => 'assets/images/drinks/americano.jpg',
        ]);

        Product::create([
            'name' => 'Mocha',
            'category' => 'Coffee',
            'description' => 'Perpaduan espresso, cokelat, dan susu yang rich dan comforting.',
            'price' => 27000,
            'rating' => 4.8,
            'image' => 'assets/images/drinks/mocha.jpg',
        ]);

        Product::create([
            'name' => 'Matcha Latte',
            'category' => 'Non Coffee',
            'description' => 'Matcha creamy dengan sensasi earthy dan sedikit manis.',
            'price' => 26000,
            'rating' => 4.8,
            'image' => 'assets/images/drinks/matcha_latte.jpg',
        ]);

        Product::create([
            'name' => 'Chocolate',
            'category' => 'Non Coffee',
            'description' => 'Minuman cokelat hangat dengan tekstur lembut dan rasa cocoa yang nyaman.',
            'price' => 24000,
            'rating' => 4.7,
            'image' => 'assets/images/drinks/chocolate.jpg',
        ]);
    }
}