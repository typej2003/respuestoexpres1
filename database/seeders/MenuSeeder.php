<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('menus')->insert([
            'area_id' => '2',
            'comercio_id' => '1',
            'texto' => 'Carro',
            'ruta' => 'Carro',
            'origen' => 'link', // view or categories
            'menu' => 1,
            'posicion' => 1,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('menus')->insert([
            'area_id' => '2',
            'comercio_id' => '1',
            'texto' => 'Moto',
            'ruta' => 'Moto',
            'origen' => 'link', // view or categories
            'menu' => 1,
            'posicion' => 2,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('menus')->insert([
            'area_id' => '2',
            'comercio_id' => '1',
            'texto' => 'Aceites',
            'ruta' => 'Aceites',
            'origen' => 'link', // view or categories
            'menu' => 1,
            'posicion' => 3,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('menus')->insert([
            'area_id' => '2',
            'comercio_id' => '1',
            'texto' => 'Baterías',
            'ruta' => 'Baterías',
            'origen' => 'link', // view or categories
            'menu' => 1,
            'posicion' => 4,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('menus')->insert([
            'area_id' => '2',
            'comercio_id' => '1',
            'texto' => 'Frenos',
            'ruta' => 'Frenos',
            'origen' => 'link', // view or categories
            'menu' => 1,
            'posicion' => 5,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('menus')->insert([
            'area_id' => '2',
            'comercio_id' => '1',
            'texto' => 'Ofertas',
            'ruta' => 'Ofertas',
            'origen' => 'link', // view or categories
            'menu' => 1,
            'posicion' => 6,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('menus')->insert([
            'area_id' => '2',
            'comercio_id' => '1',
            'texto' => 'Vende desde acá',
            'ruta' => 'Vende desde acá',
            'origen' => 'link', // view or categories
            'menu' => 1,
            'posicion' => 6,
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

    }
}
