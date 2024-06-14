<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert(
            [
                [
                    'name' => 'BI',
                    'email' => 'BI@gmail.com',
                    'address' => 'seoul',
                    'age' => 28,
                    'phone' => '4164',
                    'role_id' => 1,
                    'password' => bcrypt('password'),
                    'image' => '/storage/images/staff/bi.webp',
                    'uuid' => Str::uuid()->toString(),
                    'status' => 'Active',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'kyle',
                    'email' => 'kyle@gmail.com',
                    'address' => 'seoul',
                    'age' => 28,
                    'phone' => '4164',
                    'role_id' => 1,
                    'password' => bcrypt('kyle'),
                    'image' => '/storage/images/staff/kyle.webp',
                    'uuid' => Str::uuid()->toString(),
                    'status' => 'Active',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]
        );
    }
}
