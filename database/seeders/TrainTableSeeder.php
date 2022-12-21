<?php

namespace Database\Seeders;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $tarin = new Train();
        $train->azienda = $faker->word(5);
        $train->stazione_di_partenza = $faker->text(20);
        $train->stazione_di_arrivo = $faker->text(20);
        $train->orario_di_partenza = $faker->dateTimeInInterval(10);
        $train->orario_di_arrivo = $faker->dateTimeInInterval(10);
        $train->codice_treno = $faker->randomFloat(20);
        $train->in_orario = $faker->boolean();
        $train->cancellato = $faker->boolean();


        $train->save();
    }
}
