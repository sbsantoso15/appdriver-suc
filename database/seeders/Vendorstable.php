<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Nonstandard\Uuid;

class Vendorstable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('vendors')->insert([
            [
                'uid' => Uuid::uuid1()->toString(),
                'idvendor' => 'AAAA',
                'nmvendor' => 'PT AAAA',
            ],
            [
                'uid' => Uuid::uuid1()->toString(),
                'idvendor' => 'BBBB',
                'nmvendor' => 'PT BBBB',
            ],
            [
                'uid' => Uuid::uuid1()->toString(),
                'idvendor' => 'CCCC',
                'nmvendor' => 'PT CCCC',
            ],
        ]);
    }
}
