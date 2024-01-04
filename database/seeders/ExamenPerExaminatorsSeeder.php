<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExamenPerExaminatorsSeeder extends Seeder
{
    public function run()
    {
        DB::table('examen_per_examinators')->insert([
            [
                'id' => null,
                'examen_id' => 1,
                'examinator_id' => 3,
            ],
            [
                'id' => null,
                'examen_id' => 3,
                'examinator_id' => 3,
            ],
            [
                'id' => null,
                'examen_id' => 2,
                'examinator_id' => 2,
            ],
            [
                'id' => null,
                'examen_id' => 4,
                'examinator_id' => 1,
            ],
            [
                'id' => null,
                'examen_id' => 7,
                'examinator_id' => 3,
            ],
            [
                'id' => null,
                'examen_id' => 6,
                'examinator_id' => 2,
            ],
            [
                'id' => null,
                'examen_id' => 5,
                'examinator_id' => 4,
            ],
        ]);
    }
}
