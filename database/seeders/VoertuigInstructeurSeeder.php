<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class VoertuigInstructeurSeeder extends Seeder
{
    public function run()
    {
        DB::table('voertuig_instructeurs')->insert([
            [
                'voertuig_id' => 1,
                'instructeur_id' => 5,
                'datum_toekenning' => '2017-06-18',
                'is_actief' => 1,
                'opmerkingen' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'voertuig_id' => 3,
                'instructeur_id' => 1,
                'datum_toekenning' => '2021-09-26',
                'is_actief' => 1,
                'opmerkingen' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'voertuig_id' => 9,
                'instructeur_id' => 1,
                'datum_toekenning' => '2021-09-27',
                'is_actief' => 1,
                'opmerkingen' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'voertuig_id' => 3,
                'instructeur_id' => 4,
                'datum_toekenning' => '2022-08-01',
                'is_actief' => 1,
                'opmerkingen' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'voertuig_id' => 5,
                'instructeur_id' => 1,
                'datum_toekenning' => '2019-08-30',
                'is_actief' => 1,
                'opmerkingen' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'voertuig_id' => 10,
                'instructeur_id' => 5,
                'datum_toekenning' => '2020-02-02',
                'is_actief' => 1,
                'opmerkingen' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
