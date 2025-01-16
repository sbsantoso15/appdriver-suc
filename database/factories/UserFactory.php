<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Ramsey\Uuid\Nonstandard\Uuid;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nik' => rand(1000,2000),
            'name' =>fake()->name(),
            'password' => bcrypt('password'),
            'status' => 'Admin',
            'uid' => Uuid::uuid1()->toString(),
            'remember_token' => Str::random(10),
            'updated_at' => Carbon::now()->toDateTimeString(),
            'updated_by' => 'sys',
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return $this
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
