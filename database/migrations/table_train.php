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
  $table->string('Azienda' , 30);
  $table->string('Stazione di partenza' , 10);
  $table->string('Stazione di arrivo' , 10);
  $table->dateTime('Orario di partenza' , 10);
  $table->dateTime('Orario di arrivo' , 10);
  $table->string('Codice Treno' , 30);
  $table->tinyInteger('Numero Carrozze' , 30);
  $table->boolean('In orario' )->default(1);
  $table->boolean('Cancellato' )->default(0);
  $table->timestamps();
} ) ;


}
public function down() {
  Schema::dropIfExists('trains');
}

};


