<?php

namespace Database\Factories;

use App\Models\Driver;
use App\Models\Vehicles;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AssignedVehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'vehicle_id' => function () {
                return Vehicles::inRandomOrder()->first()->id;
            },
            'driver_id'
            => function () {
                return Driver::inRandomOrder()->first()->id;
            },
            'assigned_date' => $this->faker->date('d-m-Y H:i:s')
        ];
    }
}