<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExaminatorSeeder extends Seeder
{
    public function run()
    {
        DB::table('examinators')->insert([
            [
                'id' => null,
                'voornaam' => 'Manuel',
                'tussenvoegsel' => 'van',
                'achternaam' => 'Meekeren',
                'mobiel' => '06-28493823',
            ],
            [
                'id' => null,
                'voornaam' => 'Lissette',
                'tussenvoegsel' => 'den',
                'achternaam' => 'Dongen',
                'mobiel' => '06-24383299',
            ],
            [
                'id' => null,
                'voornaam' => 'Jurswailly',
                'tussenvoegsel' => '',
                'achternaam' => 'Luciano',
                'mobiel' => '06-48293846',
            ],
            [
                'id' => null,
                'voornaam' => 'Nashwa',
                'tussenvoegsel' => '',
                'achternaam' => 'Salawi',
                'mobiel' => '06-34291219',
            ],
        ]);
    }
}
