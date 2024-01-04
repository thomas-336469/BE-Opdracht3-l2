<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeVoertuigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_voertuigs')->insert([
            [
                'type_voertuig' => 'Personenauto',
                'rijbewijscategorie' => 'B',
                'is_actief' => 1,
                'opmerkingen' => null,
            ],
            [
                'type_voertuig' => 'Vrachtwagen',
                'rijbewijscategorie' => 'C',
                'is_actief' => 1,
                'opmerkingen' => null,
            ],
            [
                'type_voertuig' => 'Bus',
                'rijbewijscategorie' => 'D',
                'is_actief' => 1,
                'opmerkingen' => null,
            ],
            [
                'type_voertuig' => 'Bromfiets',
                'rijbewijscategorie' => 'AM',
                'is_actief' => 1,
                'opmerkingen' => null,
            ],
        ]);
    }
}
