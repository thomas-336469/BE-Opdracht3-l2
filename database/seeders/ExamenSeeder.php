<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExamenSeeder extends Seeder
{
    public function run()
    {
        DB::table('examens')->insert([
            [
                'rijschool' => 100234,
                'stad' => 'VolGasVooruit',
                'rijbewijs_categorie' => 'B',
                'datum' => '2023-04-03',
                'uitslag' => 'Geslaagd',
            ],
            [
                'rijschool' => 123432,
                'stad' => 'InZijnVierDoorDeBocht',
                'rijbewijs_categorie' => 'C',
                'datum' => '2023-03-01',
                'uitslag' => 'Geslaagd',
            ],
            [
                'rijschool' => 103234,
                'stad' => 'LinksomRechtsom',
                'rijbewijs_categorie' => 'D',
                'datum' => '2023-05-15',
                'uitslag' => 'Geslaagd',
            ],
            [
                'rijschool' => 106452,
                'stad' => 'OpDeVluchtStrook',
                'rijbewijs_categorie' => 'AM',
                'datum' => '2023-05-08',
                'uitslag' => 'Gezakt',
            ],
            [
                'rijschool' => 104546,
                'stad' => 'RechtDoorEnGaan',
                'rijbewijs_categorie' => 'B',
                'datum' => '2023-04-17',
                'uitslag' => 'Gezakt',
            ],
            [
                'rijschool' => 100333,
                'stad' => 'AltijdGeslaagd',
                'rijbewijs_categorie' => 'B',
                'datum' => '2023-05-12',
                'uitslag' => 'Geslaagd',
            ],
            [
                'rijschool' => 124444,
                'stad' => 'RijlesVoorJou',
                'rijbewijs_categorie' => 'B',
                'datum' => '2023-04-12',
                'uitslag' => 'Geslaagd',
            ],
        ]);
    }
}
