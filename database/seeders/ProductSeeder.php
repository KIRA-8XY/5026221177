<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Product::create([
            'name' => 'Madagascar Centella Ampoule',
            'slug' => 'madagascar-centella-ampoule',
            'price' => 25.99,
            'original_price' => 30.99,
            'image' => 'madagascar-centella-ampoule.jpg',
        ]);
    }
}
