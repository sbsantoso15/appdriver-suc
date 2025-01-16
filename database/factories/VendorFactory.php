<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Ramsey\Uuid\Nonstandard\Uuid;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vendors>
 */
class VendorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'uid' => Uuid::uuid1()->toString(),
            'idvendor' => rand(1000,2000),
            'nmvendor' => fake()->name(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'updated_by' => 'sys',
        ];
    }
}
