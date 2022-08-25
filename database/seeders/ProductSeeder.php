<?php

namespace Database\Seeders;

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
        DB::table('products')->insert(array(
            array(
                'name' => 'Brosur',
                'images' => 'brosur.img',
                'categories_id' => 1,
                'description' => 'Menyediakan jasa desain untuk brosur undangan',
                'price' => 35000.00,
                'slug' => 'brosur',
            ),
            array(
                'name' => 'Menu Makanan',
                'images' => 'desain.img',
                'categories_id' => 1,
                'description' => 'Menyediakan jasa desain untuk menu makanan',
                'price' => 15000.00,
                'slug' => 'menu-makanan',
            ),
            array(
                'name' => 'Print Warna',
                'images' => 'print-warna.img',
                'categories_id' => 3,
                'description' => 'Menyediakan cetak warna',
                'price' => 1000.00,
                'slug' => 'print-warna',
            ),
            array(
                'name' => 'Print Sertifikat',
                'images' => 'print-sertifikat.img',
                'categories_id' => 3,
                'description' => 'Menyediakan cetak sertifikat',
                'price' => 5000.00,
                'slug' => 'print-sertifikat',
            ),
        ));
    }
}
