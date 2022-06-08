<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->timestamps();
        });

        DB::table('empresas')->insert(array('id'=>'1','nombre'=>'Coca Cola','descripcion'=>'Gaseosa'));
        DB::table('empresas')->insert(array('id'=>'2','nombre'=>'Postobon','descripcion'=>'Gaseosa'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
};
