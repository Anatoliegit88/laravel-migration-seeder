<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {

  // Azienda
  // Stazione di partenza
  // Stazione di arrivo
  // Orario di partenza
  // Orario di arrivo
  // Codice Treno
  // Numero Carrozze
  // In orario
  // Cancellato

  public function un() {


Schema::create('trains', function(Blueprint $table) {
  $table->id();
  $table->string('azienda' , 30);
  $table->string('stazione_di_partenza' , 10);
  $table->string('stazione _di_arrivo' , 10);
  $table->dateTime('orario_di_partenza' , 10);
  $table->dateTime('orario_di_arrivo' , 10);
  $table->string('codice_Treno' , 30);
  $table->tinyInteger('numero_carrozze' , 30);
  $table->boolean('on_orario' )->default(true);
  $table->boolean('cancellato' )->default(false);
  $table->timestamps();
} ) ;


}
public function down() {
  Schema::dropIfExists('trains');
}

};


