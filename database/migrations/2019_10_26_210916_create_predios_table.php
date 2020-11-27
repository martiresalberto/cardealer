<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use phpDocumentor\Reflection\Types\Boolean;

class CreatePrediosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::create('ubicacions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::create('condicions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::create('modelos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->timestamps();
        });

        Schema::create('predios', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('user_id')->unsigned();

            $table->bigInteger('category_id')->unsigned();

            $table->bigInteger('ubicacion_id')->unsigned();

            $table->bigInteger('condicion_id')->unsigned();

            $table->bigInteger('modelo_id')->unsigned();

            $table->string('titulo', 100);
            $table->double('precio');
            $table->string('km');
            $table->longText('descripcioncompleta');

            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('category_id')->references('id')->on('categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('ubicacion_id')->references('id')->on('ubicacions')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('condicion_id')->references('id')->on('condicions')
            ->onDelete('cascade')
            ->onUpdate('cascade');


            $table->foreign('modelo_id')->references('id')->on('modelos')
            ->onDelete('cascade')
            ->onUpdate('cascade');


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
        Schema::dropIfExists('predios');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('ubicacions');
        Schema::dropIfExists('condicions');
    }
}
