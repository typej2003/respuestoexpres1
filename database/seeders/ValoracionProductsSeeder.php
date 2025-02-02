<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ValoracionProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('valoracion_products')->insert([
            'user_id' => '1',
            'product_id' => '1',
            'ca_valoracion' => '5',
            'class'  => 'five',
            'comment'  => 'Excelente Producto',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('valoracion_products')->insert([
            'user_id' => '1',
            'product_id' => '2',
            'ca_valoracion' => '5',
            'class'  => 'five',
            'comment'  => 'Excelente Producto',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('valoracion_products')->insert([
            'user_id' => '1',
            'product_id' => '3',
            'ca_valoracion' => '5',
            'class'  => 'five',
            'comment'  => 'Excelente Producto',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
    }
}
