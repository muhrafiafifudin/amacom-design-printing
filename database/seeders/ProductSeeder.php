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
                'images' => 'brosur.jpg',
                'categories_id' => 1,
                'description' => 'Menyediakan jasa desain untuk brosur undangan',
                'price' => 35000.00,
                'products_slug' => 'brosur',
            ),
            array(
                'name' => 'Menu Makanan',
                'images' => 'desain.jpg',
                'categories_id' => 1,
                'description' => 'Menyediakan jasa desain untuk menu makanan',
                'price' => 15000.00,
                'products_slug' => 'menu-makanan',
            ),
            array(
                'name' => 'Ketik Word',
                'images' => 'word.jpg',
                'categories_id' => 2,
                'description' => 'Menyediakan ketik ke word',
                'price' => 5000.00,
                'products_slug' => 'ketik-word',
            ),
            array(
                'name' => 'Ketik Excel',
                'images' => 'excel.jpg',
                'categories_id' => 2,
                'description' => 'Menyediakan ketik ke excel',
                'price' => 5000.00,
                'products_slug' => 'ketik-excel',
            ),
            array(
                'name' => 'Print Warna',
                'images' => 'print-warna.jpg',
                'categories_id' => 3,
                'description' => 'Menyediakan cetak warna',
                'price' => 1000.00,
                'products_slug' => 'print-warna',
            ),
            array(
                'name' => 'Print Sertifikat',
                'images' => 'print-sertifikat.jpg',
                'categories_id' => 3,
                'description' => 'Menyediakan cetak sertifikat',
                'price' => 5000.00,
                'products_slug' => 'print-sertifikat',
            ),
            array(
                'name' => '4x6 (Isi 5 Foto)',
                'images' => 'foto4x6.jpg',
                'categories_id' => 4,
                'description' => 'Menyediakan cetak foto 4x6',
                'price' => 6000.00,
                'products_slug' => 'cetak-foto-4x6',
            ),
            array(
                'name' => '3x4 (Isi 6 Foto)',
                'images' => 'foto3x4.jpg',
                'categories_id' => 4,
                'description' => 'Menyediakan cetak foto 3x4',
                'price' => 6000.00,
                'products_slug' => 'cetak-foto-3x4',
            ),
            array(
                'name' => '1 Play',
                'images' => '1-play.jpg',
                'categories_id' => 5,
                'description' => 'Menyediakan cetak nota 1 play',
                'price' => 180000.00,
                'products_slug' => 'cetak-nota-1-play',
            ),
            array(
                'name' => '2 Play',
                'images' => '2-play.jpg',
                'categories_id' => 5,
                'description' => 'Menyediakan cetak nota 2 play',
                'price' => 260000.00,
                'products_slug' => 'cetak-nota-2-play',
            ),
            array(
                'name' => 'MMT Bahan Bagus',
                'images' => 'mmt-bahan-bagus.jpg',
                'categories_id' => 6,
                'description' => 'Menyediakan cetak mmt bahan bagus',
                'price' => 45000.00,
                'products_slug' => 'mmt-bahan-bagus',
            ),
            array(
                'name' => 'MMT Bahan Sedang',
                'images' => 'mmt-bahan-sedang.jpg',
                'categories_id' => 6,
                'description' => 'Menyediakan cetak mmt bahan sedang',
                'price' => 35000.00,
                'products_slug' => 'mmt-bahan-sedang',
            ),
        ));
    }
}
