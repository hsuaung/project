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
                    'name' => 'Song Mino',
                    'email'=>'songmino@gmail.com',
                    'phone'=>'32132154',
                    'address'=>'seoul',
                    'password'=>Hash::make('songmino'),
                    'image'=>'/storage/images/customer/mino.jpg',
                    'uuid' => Str::uuid()->toString(),
                    'status' => 'Active',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                
                [
                    'name' => 'Nam Tae Hyun',
                    'email'=>'namtaehyun@gmail.com',
                    'phone'=>'3216544',
                    'address'=>'Seoul',
                    'password'=>Hash::make('namtaehyun'),
                    'image'=>'/storage/images/customer/namtaehyun.png',
                    'uuid' => Str::uuid()->toString(),
                    'status' => 'Active',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                
                [
                    'name' => 'Jinwoo',
                    'email'=>'jinwoo@gmail.com',
                    'phone'=>'6543032',
                    'address'=>'Hong Kong',
                    'password'=>Hash::make('jinwoo'),
                    'image'=>'/storage/images/customer/jinwoo.jpg',
                    'uuid' => Str::uuid()->toString(),
                    'status' => 'Active',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Seunghoon',
                    'email'=>'seunghoon@gmail.com',
                    'phone'=>'6543032',
                    'address'=>'Hong Kong',
                    'password'=>Hash::make('seunghoon'),
                    'image'=>'/storage/images/customer/seunghoon.jpg',
                    'uuid' => Str::uuid()->toString(),
                    'status' => 'Active',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Seungyoon',
                    'email'=>'seungyoon@gmail.com',
                    'phone'=>'6543032',
                    'address'=>'Hong Kong',
                    'password'=>Hash::make('seungyoon'),
                    'image'=>'/storage/images/customer/seungyoon.jpeg',
                    'uuid' => Str::uuid()->toString(),
                    'status' => 'Active',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                
             
            ]
        );
    }
}
