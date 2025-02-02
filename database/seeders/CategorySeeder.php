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
        DB::table('categories')->insert([
            'name' => 'CARRO',
            'description' => 'Carro',
            'img' => '',
            'parent' => '1',
            'category_id' => '0',
            'ruta' => 'Carro',
            'user_id' => '1',
            'area_id' => '2',
            'comercio_id' => '1',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'RENAULT',
            'description' => 'Carro',
            'img' => 'renault.png',
            'parent' => '0',
            'category_id' => '1',
            'ruta' => 'Carro > Renault',
            'user_id' => '1',
            'area_id' => '2',
            'comercio_id' => '1',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'PEUGEOT',
            'description' => 'Carro',
            'img' => 'peugeot.png',
            'parent' => '0',
            'category_id' => '1',
            'ruta' => 'Carro > Peugeot',
            'user_id' => '1',
            'area_id' => '2',
            'comercio_id' => '1',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'CITROEN',
            'description' => 'CITROEN',
            'img' => 'citroen.png',
            'parent' => '0',
            'category_id' => '1',
            'ruta' => 'Carro > Citroen',
            'user_id' => '1',
            'area_id' => '2',
            'comercio_id' => '1',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'TOYOTA',
            'description' => 'TOYOTA',
            'img' => 'toyota.png',
            'parent' => '0',
            'category_id' => '1',
            'ruta' => 'Carro > Toyota',
            'user_id' => '1',
            'area_id' => '2',
            'comercio_id' => '1',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'WOLKSWAGEN',
            'description' => 'WOLKSWAGEN',
            'img' => 'wolkswagen.png',
            'parent' => '0',
            'category_id' => '1',
            'ruta' => 'Carro > Wolkswagen',
            'user_id' => '1',
            'area_id' => '2',
            'comercio_id' => '1',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'FORD',
            'description' => 'FORD',
            'img' => 'ford.png',
            'parent' => '0',
            'category_id' => '1',
            'ruta' => 'Carro > Ford',
            'user_id' => '1',
            'area_id' => '2',
            'comercio_id' => '1',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'FIAT',
            'description' => 'FIAT',
            'img' => 'fiat.png',
            'parent' => '0',
            'category_id' => '1',
            'ruta' => 'Carro > Fiat',
            'user_id' => '1',
            'area_id' => '2',
            'comercio_id' => '1',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'CHEVROLET',
            'description' => 'CHEVROLET',
            'img' => 'chevrolet.png',
            'parent' => '0',
            'category_id' => '1',
            'ruta' => 'Carro > Chevrolet',
            'user_id' => '1',
            'area_id' => '2',
            'comercio_id' => '1',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'CHERY',
            'description' => 'CHERY',
            'img' => 'chery.png',
            'parent' => '0',
            'category_id' => '1',
            'ruta' => 'Carro > Chery',
            'user_id' => '1',
            'area_id' => '2',
            'comercio_id' => '1',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        //
        DB::table('categories')->insert([
            'name' => 'MOTO',
            'description' => 'MOTO',
            'img' => 'moto.png',
            'parent' => '1',
            'category_id' => '0',
            'ruta' => 'Moto',
            'user_id' => '1',
            'area_id' => '2',
            'comercio_id' => '1',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('categories')->insert([
            'name' => 'Yamaha',
            'description' => 'Yamaha',
            'img' => 'yamaha.png',
            'parent' => '0',
            'category_id' => '11',
            'ruta' => 'Moto > Yamaha',
            'user_id' => '1',
            'area_id' => '2',
            'comercio_id' => '1',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('categories')->insert([
            'name' => 'Suzuki',
            'description' => 'Suzuki',
            'img' => 'chery.png',
            'parent' => '0',
            'category_id' => '11',
            'ruta' => 'Moto > Suzuki',
            'user_id' => '1',
            'area_id' => '2',
            'comercio_id' => '1',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('categories')->insert([
            'name' => 'Empire Keeway',
            'description' => 'Empire Keeway',
            'img' => 'EmpireKeeway.png',
            'parent' => '0',
            'category_id' => '11',
            'ruta' => 'Moto > Empire Keeway',
            'user_id' => '1',
            'area_id' => '2',
            'comercio_id' => '1',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('categories')->insert([
            'name' => 'Escuda Motorcycles',
            'description' => 'Escuda Motorcycles',
            'img' => 'escudamotorcycles.png',
            'parent' => '0',
            'category_id' => '11',
            'ruta' => 'Moto > Escuda Motorcycles',
            'user_id' => '1',
            'area_id' => '2',
            'comercio_id' => '1',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('categories')->insert([
            'name' => 'Bera Motorcycles',
            'description' => 'Bera Motorcycles',
            'img' => 'beramotorcycles.png',
            'parent' => '0',
            'category_id' => '11',
            'ruta' => 'Moto > Bera Motorcycles',
            'user_id' => '1',
            'area_id' => '2',
            'comercio_id' => '1',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('categories')->insert([
            'name' => 'MD-Haojin',
            'description' => 'MD-Haojin',
            'img' => 'mdhaojin.png',
            'parent' => '0',
            'category_id' => '11',
            'ruta' => 'Moto > MD-Haojin',
            'user_id' => '1',
            'area_id' => '2',
            'comercio_id' => '1',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
        DB::table('categories')->insert([
            'name' => 'MD-Haojin',
            'description' => 'MD-Haojin',
            'img' => 'mdhaojin.png',
            'parent' => '0',
            'category_id' => '11',
            'ruta' => 'Moto > MD-Haojin',
            'user_id' => '1',
            'area_id' => '2',
            'comercio_id' => '1',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        //
        DB::table('categories')->insert([
            'name' => 'CLIO I',
            'description' => 'CLIO I',
            'img' => 'clioI.png',
            'parent' => '0',
            'category_id' => '2',
            'ruta' => 'Carro > Renault > Clio I',
            'user_id' => '1',
            'area_id' => '2',
            'comercio_id' => '1',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'CLIO II',
            'description' => 'CLIO II',
            'img' => 'clioII.png',
            'parent' => '0',
            'category_id' => '2',
            'ruta' => 'Carro > Renault > Clio II',
            'user_id' => '1',
            'area_id' => '2',
            'comercio_id' => '1',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('categories')->insert([
            'name' => 'CLIO III',
            'description' => 'CLIO III',
            'img' => 'clioIII.png',
            'parent' => '0',
            'category_id' => '2',
            'ruta' => 'Carro > Renault > Clio III',
            'user_id' => '1',
            'area_id' => '2',
            'comercio_id' => '1',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

    }
}

