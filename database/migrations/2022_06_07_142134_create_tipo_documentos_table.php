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
        Schema::create('tipo_documentos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->timestamps();
        });
        DB::table('tipo_documentos')->insert(array('id'=>'1','nombre'=>'CC','descripcion'=>'Cedula de Ciudadania'));
        DB::table('tipo_documentos')->insert(array('id'=>'2','nombre'=>'CE','descripcion'=>'Cedula de Extranjeria'));
        DB::table('tipo_documentos')->insert(array('id'=>'3','nombre'=>'TI','descripcion'=>'Tarjeta de Identidad'));
        DB::table('tipo_documentos')->insert(array('id'=>'4','nombre'=>'PS','descripcion'=>'Pasaporte'));
        DB::table('tipo_documentos')->insert(array('id'=>'5','nombre'=>'PEP','descripcion'=>'Permiso Especial de Permanencia'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_documentos');
    }
};
