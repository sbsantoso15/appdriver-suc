<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserDatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(1)->create();

        \App\Models\User::factory()->create([
            'nik' => '007',
            'name' => 'Admin',
            'password' => '$2y$10$SgSbMrgwTp0WUx25jpxYpe1LirLxNBeyVoDHRcJkkwkKd.8PNgdD2',
            'status' => 'Admin',
            'isactive' => '1',
        ]);
    }

    // public function definition(): array {
    //     return [
    //         'nik' => '007',
    //         'name' => 'Admin',
    //         'password' => '$2y$10$SgSbMrgwTp0WUx25jpxYpe1LirLxNBeyVoDHRcJkkwkKd.8PNgdD2',
    //         'status' => 'Admin',
    //         'isactive' => '1',
    //     ];
    // }
}
