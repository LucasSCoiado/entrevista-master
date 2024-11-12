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
        Schema::create('travel', function (Blueprint $table) {
            $table->id();
            $table->float('km_inicio');
            $table->float('km_fim');
            $table->integer('motorista_id');
            $table->integer('veiculo_id');
            $table->string('origem');
            $table->string('destino');
            $table->string('image');
            $table->timestamps();

            $table->foreignId('motorista_id')->references('id')->on('drivers');
            $table->foreignId('vehicle_id')->references('id')->on('travel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travel');
    }
};
