<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstructeurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instructeurs')->insert([
            [
                'voornaam' => 'Li',
                'tussenvoegsel' => '',
                'achternaam' => 'Zhan',
                'mobiel' => '06-28493827',
                'datum_in_dienst' => '2015-04-17',
                'aantal_sterren' => '***',
                'is_actief' => 1,
                'opmerkingen' => null,
            ],
            [
                'voornaam' => 'Leroy',
                'tussenvoegsel' => '',
                'achternaam' => 'Boerhaven',
                'mobiel' => '06-39398734',
                'datum_in_dienst' => '2018-06-25',
                'aantal_sterren' => '*',
                'is_actief' => 1,
                'opmerkingen' => null,
            ],
            [
                'voornaam' => 'Yoeri',
                'tussenvoegsel' => 'van',
                'achternaam' => 'Veen',
                'mobiel' => '06-24383291',
                'datum_in_dienst' => '2010-05-12',
                'aantal_sterren' => '***',
                'is_actief' => 1,
                'opmerkingen' => null,
            ],
            [
                'voornaam' => 'Bert',
                'tussenvoegsel' => 'van',
                'achternaam' => 'Sali',
                'mobiel' => '06-48293823',
                'datum_in_dienst' => '2023-01-10',
                'aantal_sterren' => '****',
                'is_actief' => 1,
                'opmerkingen' => null,
            ],
            [
                'voornaam' => 'Mohammed',
                'tussenvoegsel' => 'El',
                'achternaam' => 'Yassidi',
                'mobiel' => '06-34291234',
                'datum_in_dienst' => '2010-06-14',
                'aantal_sterren' => '*****',
                'is_actief' => 1,
                'opmerkingen' => null,
            ],
        ]);
    }
}
