<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class staffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('staff')->insert(
        [
        [
            'name' => 'Aung Moe Oo',
            'email' => 'aungmoeoo@gmail.com',
            'address' => 'Myaung Mya',
            'age' => 23,
            'phone' => '0925687455',
            'role_id' => 1,
            'password' => 'aungmoeoo',
            'image' => 'amo.jpg',
            'uuid'=>Str::uuid()->toString(),
            'status'=>'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],    
        [
            'name' => 'Hsu Yee',
            'email' => 'hsuyee@gmail.com',
            'address' => 'Pathein',
            'age' => 35,
            'phone' => '09252348370',
            'role_id' => 1,
            'password' => 'hsuyee',
            'image' => 'hsuyee.jpg',
            'uuid'=>Str::uuid()->toString(),
            'status'=>'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ], 
        [
            'name' => 'Kim Do Young',
            'email' => 'kimdoyoung@gmail.com',
            'address' => 'Seoul',
            'age' => 21,
            'phone' => '321354',
            'role_id' => 1,
            'password' => 'kimdoyoung',
            'image' => '-',
            'uuid'=>Str::uuid()->toString(),
            'status'=>'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],    
        [
            'name' => 'Hsu Aung',
            'email' => 'hsuaung@gmail.com',
            'address' => 'Pathein',
            'age' => 22,
            'phone' => '09254239048',
            'role_id' => 1,
            'password' => 'hsuaung',
            'image' => 'hsuaung.jpg',
            'uuid'=>Str::uuid()->toString(),
            'status'=>'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],   
        ]
    );
    }
}
