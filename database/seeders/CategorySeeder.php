<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(array(
            array(
                'type' => 0,
                'category' => 'Desain',
                'slug' => 'desain',
            ),
            array(
                'type' => 0,
                'category' => 'Ketik',
                'slug' => 'ketik',
            ),
            array(
                'type' => 1,
                'category' => 'Print Warna/Hitam',
                'slug' => 'print-warna-hitam',
            ),
            array(
                'type' => 1,
                'category' => 'Cetak Foto',
                'slug' => 'cetak-foto',
            ),
            array(
                'type' => 1,
                'category' => 'Nota',
                'slug' => 'nota',
            ),
            array(
                'type' => 1,
                'category' => 'MMT',
                'slug' => 'mmt',
            )
        ));
    }
}
