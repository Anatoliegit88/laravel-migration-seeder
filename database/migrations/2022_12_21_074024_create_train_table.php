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
        Schema::create('train', function (Blueprint $table) {
            $table->id();
            $table->string('azienda' , 30);
            $table->string('stazione_di_partenza' , 10);
            $table->string('stazione_di_arrivo' , 10);
            $table->dateTime('orario_di_partenza' , 10);
            $table->dateTime('orario_di_arrivo' , 10);
            $table->string('codice_treno' , 30);
            $table->tinyInteger('numero_carrozze' , 30);
            $table->boolean('in_orario' )->default(true);
            $table->boolean('cancellato' )->default(false);
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
        Schema::dropIfExists('train');
    }
};
