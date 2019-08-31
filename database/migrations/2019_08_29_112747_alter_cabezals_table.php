<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterCabezalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cabezals', function (Blueprint $table) {
             $table->integer('agent_id')->unsigned();
             $table->foreign('agent_id')->references('id')->on('cabezals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cabezals', function (Blueprint $table) {
            $table->dropColumn('agent_id');
        });
    }
}
