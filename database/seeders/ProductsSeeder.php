<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
        DB::table('products')->insert([
            'code_lote' => 'C0001',
            'code' => 'C0001',
            'name' => 'Carro 1',
            'description' => 'Carro 1',
            'details1' => 'Carro 1',
            'image_path1' => 'pan_expreso.jpg',
            'manufacturer_id' => '1', //marca
            'currency' => '$', //moneda
            'price1' => 8.0, //precio al detal
            'price_offer' => 1, //precio de oferta
            'price_divisa' => 41, //precio del dolar cuando se adquirió
            'in_delivery' => '1', 
            'stock_min' => 10,
            'stock_max' => 100,
            'stock' => 50, // cant en almacen
            'area_id' => 2,
            'user_id' => 1,
            'comercio_id' => 1,
            'category_id' => 2,
            'supplier_id' => 1, //proveedor
            'userCreated_at' => 1,
            'userUpdated_at' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        
        DB::table('products')->insert([
            'code_lote' => 'C0002',
            'code' => 'C0002',
            'name' => 'Carro 2',
            'description' => 'Carro 2',
            'details1' => 'Carro 2',
            'image_path1' => 'combo_expreso.jpg',
            'manufacturer_id' => '1', //marca
            'currency' => '$', //moneda
            'price1' => 10.0, //precio al detal
            'price_offer' => 1, //precio de oferta
            'price_divisa' => 41, //precio del dolar cuando se adquirió
            'in_delivery' => '1', 
            'in_delivery' => '1', 
            'in_combo' => '1', 
            'stock_min' => 10,
            'stock_max' => 100,
            'stock' => 50, // cant en almacen
            'area_id' => 2,
            'user_id' => 1,
            'comercio_id' => 1,
            'category_id' => 2,
            'supplier_id' => 1, //proveedor
            'userCreated_at' => 1,
            'userUpdated_at' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('products')->insert([
            'code_lote' => 'C0003',
            'code' => 'C0003',
            'name' => 'Carro 3',
            'description' => 'Carro 3',
            'image_path1' => 'pan_doralta.jpg',
            'manufacturer_id' => '1', //marca
            'currency' => '$', //moneda
            'price1' => 7.0, //precio al detal
            'price_offer' => 1, //precio de oferta
            'price_divisa' => 41, //precio del dolar cuando se adquirió
            'in_delivery' => '1', 
            'stock_min' => 10,
            'stock_max' => 100,
            'stock' => 50, // cant en almacen
            'area_id' => 2,
            'user_id' => 1,
            'comercio_id' => 1,
            'category_id' => 1,
            'supplier_id' => 1, //proveedor
            'userCreated_at' => 1,
            'userUpdated_at' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('products')->insert([
            'code_lote' => 'C0004',
            'code' => 'C0004',
            'name' => 'Carro 4',
            'description' => 'Carro 4',
            'image_path1' => 'combo_doralta.jpg',
            'manufacturer_id' => '1', //marca
            'currency' => '$', //moneda
            'price1' => 9.0, //precio al detal
            'price_offer' => 1, //precio de oferta
            'price_divisa' => 41, //precio del dolar cuando se adquirió
            'in_delivery' => '1', 
            'in_delivery' => '1', 
            'in_combo' => '1', 
            'stock_min' => 10,
            'stock_max' => 100,
            'stock' => 50, // cant en almacen
            'area_id' => 2,
            'user_id' => 1,
            'comercio_id' => 1,
            'category_id' => 2,
            'supplier_id' => 1, //proveedor
            'userCreated_at' => 1,
            'userUpdated_at' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('products')->insert([
            'code_lote' => 'C0005',
            'code' => 'C0005',
            'name' => 'Carro 5',
            'description' => 'Carro 5',
            'image_path1' => 'pan_olandely.png',
            'manufacturer_id' => '1', //marca
            'currency' => '$', //moneda
            'price1' => 10.0, //precio al detal
            'price_offer' => 1, //precio de oferta
            'price_divisa' => 41, //precio del dolar cuando se adquirió
            'in_delivery' => '1', 
            'stock_min' => 10,
            'stock_max' => 100,
            'stock' => 50, // cant en almacen
            'area_id' => 2,
            'user_id' => 1,
            'comercio_id' => 1,
            'category_id' => 2,
            'supplier_id' => 1, //proveedor
            'userCreated_at' => 1,
            'userUpdated_at' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        
        DB::table('products')->insert([
            'code_lote' => 'C0006',
            'code' => 'C0006',
            'name' => 'Carro 6',
            'description' => 'Carro 6',
            'image_path1' => 'combo_olandely.jpg',
            'manufacturer_id' => '1', //marca
            'currency' => '$', //moneda
            'price1' => 12.0, //precio al detal
            'price_offer' => 1, //precio de oferta
            'price_divisa' => 41, //precio del dolar cuando se adquirió
            'in_delivery' => '1', 
            'in_delivery' => '1', 
            'in_combo' => '1', 
            'stock_min' => 10,
            'stock_max' => 100,
            'stock' => 50, // cant en almacen
            'area_id' => 2,
            'user_id' => 1,
            'comercio_id' => 1,
            'category_id' => 2,
            'supplier_id' => 1, //proveedor
            'userCreated_at' => 1,
            'userUpdated_at' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        

    }
}





