<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManufacturersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */ 
    public function run()
    {
        DB::table('manufacturers')->insert([
            'name' => 'RENAULT',
            'avatar' => 'logo_marca1.png',
            'mercado' => 'original',
            'area_id' => '2',
            'user_id' => '1',
            'comercio_id' => '1',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('manufacturers')->insert([
            'name' => 'PEUGEOT',
            'avatar' => 'logo_marca2.png',
            'mercado' => 'original',
            'area_id' => '2',
            'user_id' => '1',
            'comercio_id' => '1',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('manufacturers')->insert([
            'name' => 'CITROËN',
            'avatar' => 'logo_marca3.png',
            'mercado' => 'original',
            'area_id' => '2',
            'user_id' => '1',
            'comercio_id' => '1',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('manufacturers')->insert([
            'name' => 'TOYOTA',
            'avatar' => 'logo_marca4.png',
            'mercado' => 'original',
            'area_id' => '2',
            'user_id' => '1',
            'comercio_id' => '1',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

        DB::table('manufacturers')->insert([
            'name' => 'WOLKSWAGEN',
            'avatar' => 'logo_marca5.png',
            'mercado' => 'original',
            'area_id' => '2',
            'user_id' => '1',
            'comercio_id' => '1',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);

    }
}
