<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('products') -> insert ([
            'product_name' => 'Togetherness',
            'product_price'=> 15000,
            'photo'=>'assets/img/products/image1.jpg',
            'product_category'=>'paintings',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Whispering Meadows',
            'product_price'=> 12900,
            'photo'=>'assets/img/products/image2.jpg',
            'product_category'=>'paintings',


        ]);

        DB::table('products') -> insert ([
            'product_name' => 'Mystic Veil',
            'product_price'=> 18100,
            'photo'=>'assets/img/products/image3.jpg',
            'product_category'=>'paintings',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Tranquil Dusk',
            'product_price'=>  17850,
            'photo'=>'assets/img/products/image4.jpg',
            'product_category'=>'paintings',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Enchance of Eternity',
            'product_price'=>  18750            ,
            'photo'=>'assets/img/products/image5.jpg',
            'product_category'=>'paintings',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Whimsical Rhapsody',
            'product_price'=>  7000          ,
            'photo'=>'assets/img/products/image6.jpg',
            'product_category'=>'paintings',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Prairie Mountain',
            'product_price'=>  22000         ,
            'photo'=>'assets/img/products/image25.jpg',
            'product_category'=>'paintings',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Mystical Feelings',
            'product_price'=> 35000        ,
            'photo'=>'assets/img/products/image26.jpg',
            'product_category'=>'paintings',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Infinite Whispers',
            'product_price'=> 17800       ,
            'photo'=>'assets/img/products/image7.jpg',
            'product_category'=>'paintings',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Velvet Serenity',
            'product_price'=> 21000      ,
            'photo'=>'assets/img/products/image8.jpg',
            'product_category'=>'paintings',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Silent Embers',
            'product_price'=>15000     ,
            'photo'=>'assets/img/products/image9.jpg',
            'product_category'=>'paintings',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Galatic Melody',
            'product_price'=>20000  ,
            'photo'=>'assets/img/products/image10.jpg',
            'product_category'=>'paintings',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Spectral Whirlwind',
            'product_price'=> 27000  ,
            'photo'=>'assets/img/products/image11.jpg',
            'product_category'=>'paintings',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Whispers of the sea',
            'product_price'=> 22000  ,
            'photo'=>'assets/img/products/image12.jpg',
            'product_category'=>'paintings',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Fragile Cosmos',
            'product_price'=> 21300  ,
            'photo'=>'assets/img/products/image13.jpg',
            'product_category'=>'paintings',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Stardust Symphony',
            'product_price'=> 9000  ,
            'photo'=>'assets/img/products/image14.jpg',
            'product_category'=>'paintings',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Celestial Ballet',
            'product_price'=> 12900,
            'photo'=>'assets/img/products/image15.jpg',
            'product_category'=>'paintings',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Gental Rain Rhapsody',
            'product_price'=> 16000,
            'photo'=>'assets/img/products/image16.jpg',
            'product_category'=>'paintings',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Sunlit Valley Overtune',
            'product_price'=> 16700,
            'photo'=>'assets/img/products/image17.jpg',
            'product_category'=>'paintings',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Harbor of Tranquility',
            'product_price'=> 25000,
            'photo'=>'assets/img/products/image18.jpg',
            'product_category'=>'paintings',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Serene Lakeside',
            'product_price'=>  19630,
            'photo'=>'assets/img/products/image19.jpg',
            'product_category'=>'paintings',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Hushed Tidal Melody',
            'product_price'=> 27000,
            'photo'=>'assets/img/products/image21.jpg',
            'product_category'=>'paintings',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Aquamarine Mirage',
            'product_price'=> 30000,
            'photo'=>'assets/img/products/image22.jpg',
            'product_category'=>'paintings',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Emerald Euphoria',
            'product_price'=> 27900,
            'photo'=>'assets/img/products/image23.jpg',
            'product_category'=>'paintings',


        ]);

        DB::table('products') -> insert ([
            'product_name' => 'Serendipitous Embrace',
            'product_price'=>32000,
            'photo'=>'assets/img/products/image24.jpg',
            'product_category'=>'paintings',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Swahili Sparkle',
            'product_price'=>900,
            'photo'=>'assets/img/products/image29.jpg',
            'product_category'=>'Jewelry',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'African Sunburst',
            'product_price'=>7800,
            'photo'=>'assets/img/products/image27.jpg',
            'product_category'=>'Jewelry',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Ethio Elegance',
            'product_price'=>4900,
            'photo'=>'assets/img/products/image28.jpg',
            'product_category'=>'Jewelry',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Bantu BeadWorks',
            'product_price'=>1500,
            'photo'=>'assets/img/products/image30.jpg',
            'product_category'=>'Jewelry',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Safari Shimmer',
            'product_price'=>400,
            'photo'=>'assets/img/products/image31.jpg',
            'product_category'=>'Jewelry',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Maasai Mosaic',
            'product_price'=>700,
            'photo'=>'assets/img/products/image32.jpg',
            'product_category'=>'Jewelry',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Necklace Nouveau',
            'product_price'=>200,
            'photo'=>'assets/img/products/image34.jpg',
            'product_category'=>'Jewelry',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Nubians Night',
            'product_price'=>450,
            'photo'=>'assets/img/products/image33.jpg',
            'product_category'=>'Jewelry',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Afro-Aura',
            'product_price'=>300,
            'photo'=>'assets/img/products/image35.jpg',
            'product_category'=>'Jewelry',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Safari Savvy',
            'product_price'=>350,
            'photo'=>'assets/img/products/image36.jpg',
            'product_category'=>'Jewelry',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Congo Crest',
            'product_price'=>120,
            'photo'=>'assets/img/products/image37.jpg',
            'product_category'=>'Jewelry',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Ndebele Nectar',
            'product_price'=>300,
            'photo'=>'assets/img/products/image38.jpg',
            'product_category'=>'Jewelry',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Kilimanjaro Drops',
            'product_price'=>200,
            'photo'=>'assets/img/products/image40.jpg',
            'product_category'=>'Jewelry',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Maasai Mara Marvels',
            'product_price'=>380,
            'photo'=>'assets/img/products/image42.jpg',
            'product_category'=>'Jewelry',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Kalahari Charms',
            'product_price'=>100,
            'photo'=>'assets/img/products/image43.jpg',
            'product_category'=>'Jewelry',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Tanzania Twighlights',
            'product_price'=>700,
            'photo'=>'assets/img/products/image44.jpg',
            'product_category'=>'Jewelry',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Malawi Marvels',
            'product_price'=> 300,
            'photo'=>'assets/img/products/image45.jpg',
            'product_category'=>'Jewelry',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Serengeti Studs',
            'product_price'=> 400,
            'photo'=>'assets/img/products/image46.jpg',
            'product_category'=>'Jewelry',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Serengeti Studs',
            'product_price'=> 400,
            'photo'=>'assets/img/products/image46.jpg',
            'product_category'=>'Jewelry',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Moroccan Glamour',
            'product_price'=> 700,
            'photo'=>'assets/img/products/image47.jpg',
            'product_category'=>'Jewelry',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Zazibar Zest',
            'product_price'=> 100,
            'photo'=>'assets/img/products/image39.jpg',
            'product_category'=>'Jewelry',


        ]);
        DB::table('products') -> insert ([
            'product_name' => 'Solitary Pine Symphony',
            'product_price'=> 23000,
            'photo'=>'assets/img/products/image20.jpg',
            'product_category'=>'Jewelry',


        ]);

    }

