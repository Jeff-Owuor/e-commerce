<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        DB::table('products')->insert([
            'productName'=>'Pilau masala',
            'price'=>'Kes140',
            'category'=>'spices',
            'description'=>'Blended with love',
            'gallery'=>'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.8npnTsuA_5k1zqdX9J7u4wHaHa%26pid%3DApi%26h%3D160&f=1',

        ]); 
    }
}
