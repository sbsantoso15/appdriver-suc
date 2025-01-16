<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Ramsey\Uuid\Nonstandard\Uuid;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KendaraanModel>
 */
class KendaraanModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'noplat'=> 'L-'. rand(1000,2000). '-'. strtoupper(Str::random(3)),
            'nik'=> rand(4000,5000),
            'masasewa1' => Carbon::now()->toDateTimeString(),
            'updated_by' => 'sys',
            'uid' => Str::uuid(),            
            // 'uid' => Uuid::uuid1()->toString(),            
        ];
    }
}
