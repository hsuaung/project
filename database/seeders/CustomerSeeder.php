<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('customers')->insert(
            [
                [
                    'name' => 'Khin Maung Win',
                    'email'=>'khinmaungwin@gmail.com',
                    'phone'=>'953216823',
                    'address'=>'North Dagon',
                    'password'=>Hash::make('khinmaungwin'),
                    'uuid' => Str::uuid()->toString(),
                    'status' => 'Active',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                
                [
                    'name' => 'Hein Htet Aung',
                    'email'=>'heinhtetaung@gmail.com',
                    'phone'=>'3216544',
                    'address'=>'Tamwe',
                    'password'=>Hash::make('heinhtetaung'),
                    'uuid' => Str::uuid()->toString(),
                    'status' => 'Active',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                
                [
                    'name' => 'Ye Yint Oo',
                    'email'=>'yeyintoo@gmail.com',
                    'phone'=>'6543032',
                    'address'=>'Hong Kong',
                    'password'=>Hash::make('yeyintoo'),
                    'uuid' => Str::uuid()->toString(),
                    'status' => 'Active',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                
             
            ]
        );
    }
}
