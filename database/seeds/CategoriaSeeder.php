<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categories')->insert([
            'nombre' => 'Cabezal',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);

        DB::table('categories')->insert([
            'nombre' => 'Camion',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);

        DB::table('categories')->insert([
            'nombre' => 'Furgon',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);

        DB::table('categories')->insert([
            'nombre' => 'Carro',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);

        DB::table('categories')->insert([
            'nombre' => 'Pickup',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);

        DB::table('categories')->insert([
            'nombre' => 'Moto',
             'created_at' => Carbon::now(),
             'updated_at' => Carbon::now(),
        ]);

    }
}
