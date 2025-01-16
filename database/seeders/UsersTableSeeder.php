<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('users')->delete();
        
        DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nik' => '2479',
                'name' => 'Dr. Josh Lakin',
                'password' => '$2y$10$Ts1NAPoTF5T9I8QdKif/zuAjHykjq5WkkR9Sfg.gFKCAlcmIvkV9m',
                'remember_token' => 'JF0RRiVN8jna6IMr9M3zt5bCB04hdR6zN6JW8BwzRyAyw2L1ykpNFIVQvDkc',
                'created_at' => '2025-01-11 21:20:35',
                'updated_at' => '2025-01-11 21:20:34',
                'updated_by' => 'sys',
                'status' => 'Driver',
                'uid' => '38da5946-d027-11ef-979f-0a0027000019',
                'isactive' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'nik' => '2614',
                'name' => 'Mrs. Anjali Dickinson',
                'password' => '$2y$10$pbR6ZojRt8KqfZvEKmnqL.jUTkPd4lsQW1US69fn6VnXU9ud3JpoW',
                'remember_token' => 'IuUHOGb0Rm',
                'created_at' => '2025-01-11 21:20:35',
                'updated_at' => '2025-01-11 21:20:34',
                'updated_by' => 'sys',
                'status' => 'Driver',
                'uid' => '38e67406-d027-11ef-9ebd-0a0027000019',
                'isactive' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'nik' => '2464',
                'name' => 'Maryjane Jones',
                'password' => '$2y$10$NBHm/yVLJIc1LKB0lf7SyORMB7FsqZMZhW461xJG8Sa9DHE9jbtla',
                'remember_token' => 'mEsQVUpjkt',
                'created_at' => '2025-01-11 21:20:35',
                'updated_at' => '2025-01-11 21:20:34',
                'updated_by' => 'sys',
                'status' => 'Driver',
                'uid' => '38f1392c-d027-11ef-abc6-0a0027000019',
                'isactive' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'nik' => '2254',
                'name' => 'Fermin Beatty',
                'password' => '$2y$10$FG/2.DH8PD96mKM2VaD8..mw.abKejY6s5tBgARJanQadoPwGIl5u',
                'remember_token' => '2KDT32GQmP',
                'created_at' => '2025-01-11 21:20:35',
                'updated_at' => '2025-01-11 21:20:35',
                'updated_by' => 'sys',
                'status' => 'Driver',
                'uid' => '38fbec28-d027-11ef-a9ba-0a0027000019',
                'isactive' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'nik' => '2906',
                'name' => 'Bria Gaylord',
                'password' => '$2y$10$6Bgu2DA6e9lUtLiCN/0GuOWffVr6uhXdoJ3nGjKTazlfSajqgVE1i',
                'remember_token' => '1zejPZtsyx',
                'created_at' => '2025-01-11 21:20:35',
                'updated_at' => '2025-01-11 21:20:35',
                'updated_by' => 'sys',
                'status' => 'Driver',
                'uid' => '390501aa-d027-11ef-8350-0a0027000019',
                'isactive' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'nik' => '2034',
                'name' => 'Rae Gaylord',
                'password' => '$2y$10$l1wKQKZThyATEjKV0zpf0u5PKro8Xi1LUA0ndG6OWOwqsDTs1ZJ76',
                'remember_token' => 'gRHaJnk8m5',
                'created_at' => '2025-01-11 21:20:35',
                'updated_at' => '2025-01-11 21:20:35',
                'updated_by' => 'sys',
                'status' => 'Driver',
                'uid' => '390e03cc-d027-11ef-9e9c-0a0027000019',
                'isactive' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'nik' => '2537',
                'name' => 'Lysanne Osinski',
                'password' => '$2y$10$uRJPzIt85TFQS.V6L0WUCedxIGJXRNaYqlqTzGkpmiAEyMgUiarey',
                'remember_token' => 'fggQdtVE0E',
                'created_at' => '2025-01-11 21:20:35',
                'updated_at' => '2025-01-11 21:20:35',
                'updated_by' => 'sys',
                'status' => 'Driver',
                'uid' => '3917206a-d027-11ef-8b35-0a0027000019',
                'isactive' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'nik' => '2465',
                'name' => 'Jovani Ernser',
                'password' => '$2y$10$CLa9PhPm7aqnGp33tMM4tOv3Ym4iKM79SXDM2pD905QvHvfaStqim',
                'remember_token' => 'LjNELKMpxI',
                'created_at' => '2025-01-11 21:20:35',
                'updated_at' => '2025-01-11 21:20:35',
                'updated_by' => 'sys',
                'status' => 'Driver',
                'uid' => '39207b10-d027-11ef-b38d-0a0027000019',
                'isactive' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'nik' => '2385',
                'name' => 'Brant Ullrich',
                'password' => '$2y$10$g644oV3s/tq7jS9iKKFNE.kS8A2z4lgblzmy7sWa9HgDX5LjB6g6y',
                'remember_token' => 'dJ1WGCxTm2',
                'created_at' => '2025-01-11 21:20:35',
                'updated_at' => '2025-01-11 21:20:35',
                'updated_by' => 'sys',
                'status' => 'Driver',
                'uid' => '392994d4-d027-11ef-a954-0a0027000019',
                'isactive' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'nik' => '2852',
                'name' => 'Martin Gibson Jr.',
                'password' => '$2y$10$zC76NHBDzYZPg9ntZHOmy.sZ2qUrRxFpIqeSs3NG6hvTEm1TYAzq6',
                'remember_token' => 'WyqL8BRnCg',
                'created_at' => '2025-01-11 21:20:35',
                'updated_at' => '2025-01-11 21:20:35',
                'updated_by' => 'sys',
                'status' => 'Driver',
                'uid' => '3933fa50-d027-11ef-83c3-0a0027000019',
                'isactive' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'nik' => '2013',
                'name' => 'Prof. Gordon Stanton DVM',
                'password' => '$2y$10$yTxBHCLkycvRZadS1Wx3ZeQ0sTGGOuar7eWwyZL9IDtwxJPFCdYJO',
                'remember_token' => 'YVh81jvCly',
                'created_at' => '2025-01-11 21:20:35',
                'updated_at' => '2025-01-11 21:20:35',
                'updated_by' => 'sys',
                'status' => 'Driver',
                'uid' => '393e1f80-d027-11ef-89f5-0a0027000019',
                'isactive' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'nik' => '2707',
                'name' => 'Cali Mraz',
                'password' => '$2y$10$yNIMJBc3wDMYGVLzQXAk/.y2myq9zOj6G3JcmWQPqnCYfX.4qVetK',
                'remember_token' => 'cVt1XU5eG6',
                'created_at' => '2025-01-11 21:20:35',
                'updated_at' => '2025-01-11 21:20:35',
                'updated_by' => 'sys',
                'status' => 'Driver',
                'uid' => '3948ea14-d027-11ef-b888-0a0027000019',
                'isactive' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'nik' => '2197',
                'name' => 'Scottie Cormier',
                'password' => '$2y$10$kQF0WPDLnBrKjdNsoRco2eH/XOS94jAhsF3eqiE1wglTag0wOzK6q',
                'remember_token' => 'dZXHwom83d',
                'created_at' => '2025-01-11 21:20:35',
                'updated_at' => '2025-01-11 21:20:35',
                'updated_by' => 'sys',
                'status' => 'Driver',
                'uid' => '39538500-d027-11ef-850a-0a0027000019',
                'isactive' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'nik' => '2756',
                'name' => 'Dr. Shaun Paucek V',
                'password' => '$2y$10$mODQQtgpVvr1FLflpfa0EOpVdeOSUjvBR3efCcwg4hD/j2obi0dby',
                'remember_token' => 'VcEkZLynHn',
                'created_at' => '2025-01-11 21:20:35',
                'updated_at' => '2025-01-11 21:20:35',
                'updated_by' => 'sys',
                'status' => 'Driver',
                'uid' => '395e96c0-d027-11ef-b8e4-0a0027000019',
                'isactive' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'nik' => '2905',
                'name' => 'Sally Shields III',
                'password' => '$2y$10$rP.uVEXshVvUD1zz0zXQ3.3jlocD2t9CEqfCb.XplQWr8ym5Zmm8m',
                'remember_token' => 'sM2dfWB7aG',
                'created_at' => '2025-01-11 21:20:35',
                'updated_at' => '2025-01-11 21:20:35',
                'updated_by' => 'sys',
                'status' => 'Driver',
                'uid' => '39698f12-d027-11ef-ba4d-0a0027000019',
                'isactive' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'nik' => '2865',
                'name' => 'Joel Toy',
                'password' => '$2y$10$o5w5WDtbfs3oMRL26Oeyv.65kYVbnLUBdzWYD2Q0.Q5Y9y1HQeTcS',
                'remember_token' => 'BIeotUXTYS',
                'created_at' => '2025-01-11 21:21:00',
                'updated_at' => '2025-01-11 21:21:00',
                'updated_by' => 'sys',
                'status' => 'Driver',
                'uid' => '483a0ec2-d027-11ef-8f6a-0a0027000019',
                'isactive' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'nik' => '2831',
                'name' => 'Virginia Green',
                'password' => '$2y$10$hBxnl0kqLV2lRYGLLOG.LewWO5EArPZ0rbWtoeXLWOtgIofAr1tMq',
                'remember_token' => 'snJpDQnu71',
                'created_at' => '2025-01-11 21:21:00',
                'updated_at' => '2025-01-11 21:21:00',
                'updated_by' => 'sys',
                'status' => 'Driver',
                'uid' => '48450840-d027-11ef-9405-0a0027000019',
                'isactive' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'nik' => '2138',
                'name' => 'Otho Koelpin',
                'password' => '$2y$10$0YX0urfGgE6ynzb23sclBeoI7574Dg.NV/.ovs7hd.Iqe6lEoP/8O',
                'remember_token' => 'O6wYkFIPwS',
                'created_at' => '2025-01-11 21:21:00',
                'updated_at' => '2025-01-11 21:21:00',
                'updated_by' => 'sys',
                'status' => 'Driver',
                'uid' => '484fec56-d027-11ef-a0e4-0a0027000019',
                'isactive' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'nik' => '1006',
                'name' => 'Mohamed Ullrich',
                'password' => '$2y$10$Bm9bqgxljrpVi6TsEdIawOK4bkCBD.nJQ5.KrmN53ZIztZ27/oy/q',
                'remember_token' => '8YLVRonSg7r9x26PORoJNUleaE1zpHklatnMlKtDXxpRR1YaYCpW0nK0HlAc',
                'created_at' => '2025-01-11 21:22:05',
                'updated_at' => '2025-01-11 21:22:05',
                'updated_by' => 'sys',
                'status' => 'Admin',
                'uid' => '6ecbb98c-d027-11ef-a633-0a0027000019',
                'isactive' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'nik' => '1967',
                'name' => 'Abby Connelly',
                'password' => '$2y$10$ZOMKeCiDGICe0.UzSr9giuj14chTXbVq0x6.gN41hM90.M4R2fJBm',
                'remember_token' => 'QEh91X5f5g',
                'created_at' => '2025-01-11 21:22:05',
                'updated_at' => '2025-01-11 21:22:05',
                'updated_by' => 'sys',
                'status' => 'Admin',
                'uid' => '6eda9b78-d027-11ef-9d62-0a0027000019',
                'isactive' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'nik' => '1534',
                'name' => 'Marjolaine Runolfsson',
                'password' => '$2y$10$9l2ec9nrqemZP6BB9rhPHufr/G7f8rHsPb8IY35UihWtBe8AxGHka',
                'remember_token' => 'cXdWrFN4M7',
                'created_at' => '2025-01-11 21:22:05',
                'updated_at' => '2025-01-11 21:22:05',
                'updated_by' => 'sys',
                'status' => 'Admin',
                'uid' => '6ee4c7ba-d027-11ef-83bc-0a0027000019',
                'isactive' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'nik' => 'ZZZZ',
                'name' => 'KOSONG',
                'password' => '$2y$10$9l2ec9nrqemZP6BB9rhPHufr/G7f8rHsPb8IY35UihWtBe8AxGHka',
                'remember_token' => 'cXdWrFN4M7',
                'created_at' => '2025-01-11 21:22:05',
                'updated_at' => '2025-01-11 21:22:05',
                'updated_by' => 'sys',
                'status' => 'Driver',
                'uid' => '6ee4c7ba-d027-11ef-83bc-0a0027000020',
                'isactive' => 0,
            ),
        ));
        
        
    }
}