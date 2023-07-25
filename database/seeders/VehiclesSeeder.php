<?php

namespace Database\Seeders;

use App\Models\Vehicles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehiclesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vehicles')->insert([
            [
                'color' => 'black',
                'model' => 'camry',
                'maker' => 'Toyota',
                'year' => '2012',
                'seating_capacity' => 4,
                'license_plate' => 'AGT-1234',
                'registrated_date' => date('d-m-Y H:i:s')
            ],
            [
                'model' => 'accord',
                'maker' => 'Honda',
                'color' => 'grey',
                'year' => '2010',
                'seating_capacity' => 6,
                'license_plate' => 'AGA-1235',
                'registrated_date' => date('d-m-Y H:i:s')
            ],

        ]);
    }
}
