<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('product') -> insert ([
            'product-name' => "Togetherness",
            "product-price"=> "15,000",
            "product-category"=>"paintings",
            "photo"=>"assets/img/products/image1.jpg"

        ]);
    }

}
