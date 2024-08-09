<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('destinations')->insert(
            [
                [
                    'id' => 1,
                    'destination' => 'Iran',
                    'created_at' => now()
                ],
                [
                    'id' => 2,
                    'destination' => 'Japan',
                    'created_at' => now()
                ],
                [
                    'id' => 3,
                    'destination' => 'Turkey',
                    'created_at' => now()
                ],
                [
                    'id' => 4,
                    'destination' => 'Korea',
                    'created_at' => now()
                ]
            ]

        );

    }
}
