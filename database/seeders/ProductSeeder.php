<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{

    public function run()
    {
        /*
     Product::create([
    'name' => 'Shampoo',
    'description' => 'A premium shampoo for smooth and shiny hair.',
    'price' => 15.99,
    'inventory' => 50,
    'image_url' => '/images/shampoo.jpg',
]);

Product::create([
    'name' => 'Hair Oil',
    'description' => 'Organic hair oil for strong and healthy roots.',
    'price' => 12.99,
    'inventory' => 30,
    'image_url' => '/images/hair-oil.jpg',
]);

Product::create([
    'name' => 'Face Cream',
    'description' => 'Hydrating cream for glowing skin.',
    'price' => 20.99,
    'inventory' => 20,
    'image_url' => '/images/face-cream.jpg',
    */

    $products = [
        ['name' => 'Hair Shampoo', 'price' => 19.99],
        ['name' => 'Hair Conditioner', 'price' => 15.99],
        ['name' => 'Hair Styling Gel', 'price' => 12.99],
        ['name' => 'Hair Treatment Oil', 'price' => 22.99],
        ['name' => 'Facial Cleanser', 'price' => 18.99],
        ['name' => 'Shampoo Brush', 'price' => 9.99],
        ['name' => 'Shaving Cream', 'price' => 14.99],
        ['name' => 'Hair Color', 'price' => 25.99],
];

foreach ($products as $product) {
    Product::create($product);

    }
    }
}