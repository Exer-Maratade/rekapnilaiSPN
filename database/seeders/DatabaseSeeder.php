<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\angkatan;
use App\Models\kompi;
use App\Models\pleton;
use App\Models\tahun;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // pleton::factory(10)->create();


        // \App\Models\pleton::factory()->create([
        //     'pleton' => '1',
        // ]);

        pleton::create([
            'pleton' => '1',
        ]);
        pleton::create([
            'pleton' => '2',
        ]);
        pleton::create([
            'pleton' => '3',
        ]);

        kompi::create([
            'kompi' => 'a',
        ]);
        kompi::create([
            'kompi' => 'b',
        ]);
        kompi::create([
            'kompi' => 'c',
        ]);

        tahun::create([
            'tahun' => '2020',
        ]);
        tahun::create([
            'tahun' => '2021',
        ]);
        tahun::create([
            'tahun' => '2022',
        ]);

        angkatan::create([
            'angkatan' => '45',
        ]);
        angkatan::create([
            'angkatan' => '46',
        ]);
        angkatan::create([
            'angkatan' => '47',
        ]);


    }
}
