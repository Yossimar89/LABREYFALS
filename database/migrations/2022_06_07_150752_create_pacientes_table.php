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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre1');
            $table->string('nombre2')->nullable();
            $table->string('apellido1');
            $table->string('apellido2');
            $table->integer('documento');
            $table->string('direccion')->nullable();
            $table->integer('telefono')->nullable();
            $table->string('correo')->nullable();
            $table->unsignedBigInteger('sexo_id');
            $table->unsignedBigInteger('empresa_id');
            $table->unsignedBigInteger('tipo_documento_id');

            //Foraneas
            $table->foreign('sexo_id')->references('id')->on('sexos')->onDelete('cascade');
            $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete('cascade');
            $table->foreign('tipo_documento_id')->references('id')->on('tipo_documentos')->onDelete('cascade');
            
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
        Schema::dropIfExists('pacientes');
    }
};
