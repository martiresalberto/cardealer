<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCabezalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cabezals', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('name_marca');
            $table->string('modelo');
            $table->string('type_motor');
            $table->string('type_camarote');
            $table->string('type_caja');
            $table->string('type_llantas');
            $table->string('type_freno');
            $table->string('color');
            $table->string('type_ejes');
            $table->mediumText('ubication');
            $table->mediumText('state_cabezal');
            $table->decimal('price');
            $table->string('imgCabezal')->default('default-image-car.png');
            
            $table->timestamps();
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cabezals');
    }
}
