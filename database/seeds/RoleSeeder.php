<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
             'name' => 'admin',
             'display_name' => 'admin',
             'description' => 'admin de la pagina',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);

        DB::table('roles')->insert([
            'name' => 'moderador',
            'display_name' => 'moderador',
            'description' => 'moderador de la pagina',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
       ]);

       DB::table('roles')->insert([
        'name' => 'visitante',
        'display_name' => 'visitante',
        'description' => 'visitante de la pagina',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
   ]);
    }
}
