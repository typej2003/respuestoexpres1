<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'user_id' => '1',
            'site_name' => 'RepuestoExpres',
            'site_email' => 'repuestoexpres@gmail.com',
            'site_title' => 'RepuestoExpres',
            'footer_text' => '',
            'sidebar_collapse' => true,
            'in_cellphonecontact' => true,  
            'in_sliderprincipal' => true,
            'in_marcasproductos' => false,
            'currency' => '$',
            'api_bcv' => 'NO',
            'created_at' => '2022-05-16 12:20:36',
            'updated_at' => '2022-05-16 12:20:36'
        ]);
    }
}
