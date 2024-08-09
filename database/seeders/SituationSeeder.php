<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SituationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('situations')->insert(
            [
                [
                    'id' => 1,
                    'situation' => 'GA',
                    'created_at' => now()
                ],
                [
                    'id' => 2,
                    'situation' => 'CXL',
                    'created_at' => now()
                ],
                [
                    'id' => 3,
                    'situation' => 'P',
                    'created_at' => now()
                ],

            ]
        );
    }
}
