<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {

            $new_train = new Train();
            $new_train->azienda = $faker->randomElement(['Trenitalia', 'Italo']);
            $new_train->stazione_partenza = $faker->randomElement(['Roma Termini', 'Roma Tiburtina', 'Firenze', 'Napoli', 'Caserta','Milano', 'Bologna']);
            $new_train->stazione_arrivo = $faker->randomElement(['Roma Termini', 'Roma Tiburtina', 'Firenze', 'Napoli', 'Caserta','Milano', 'Bologna']);
            $new_train->orario_partenza = $faker->dateTimeBetween('-1 week', '+1 week');
            $new_train->orario_arrivo = $faker->dateTimeBetween('-1 week', '+1 week');
            $new_train->codice_treno = $faker->bothify('??-######');
            $new_train->numero_carrozze = $faker->numberBetween(1, 15);
            $new_train->in_orario = $faker->randomElement([0, 1]);
            $new_train->cancellato = $faker->randomElement([0, 1]);
            $new_train->save();
        }
    }
}
