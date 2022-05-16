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
        Schema::create('domi_gerados', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 10);
            $table->string('descripcion', 50);
            $table->integer('cantidad');
            $table->decimal('precio', 8, 2); 
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
        Schema::dropIfExists('domi_gerados');
    }
};
