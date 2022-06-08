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
        Schema::create('sexos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->timestamps();
        });
        DB::table('sexos')->insert(array('id'=>'1','nombre'=>'M','descripcion'=>'Masculino'));
        DB::table('sexos')->insert(array('id'=>'2','nombre'=>'F','descripcion'=>'Femenino'));
        DB::table('sexos')->insert(array('id'=>'3','nombre'=>'NB','descripcion'=>'No Binario'));
        DB::table('sexos')->insert(array('id'=>'4','nombre'=>'TRS','descripcion'=>'Transexual'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sexos');
    }
};
