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
    
        DB::table('staff')->insert(
        [
        [
            'name' => 'BI',
            'email' => 'BI@gmail.com',
            'address' => 'seoul',
            'age' => 28,
            'phone' => '4164',
            'role_id' => 1,
            'password' => 'BI',
            'image'=>'/storage/images/staff/bi.webp',
            'uuid'=>Str::uuid()->toString(),
            'status'=>'Active',
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
            'password' => 'kyle',
            'image'=>'/storage/images/staff/kyle.webp',
            'uuid'=>Str::uuid()->toString(),
            'status'=>'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ], 
        [
            'name' => 'one',
            'email' => 'BI@gmail.com',
            'address' => 'seoul',
            'age' => 28,
            'phone' => '4164',
            'role_id' => 3,
            'password' => 'one',
            'image'=>'/storage/images/staff/one.jpg',
            'uuid'=>Str::uuid()->toString(),
            'status'=>'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],  
        [
            'name' => 'yedam',
            'email' => 'yedam@gmail.com',
            'address' => 'seoul',
            'age' => 28,
            'phone' => '4164',
            'role_id' => 2,
            'password' => 'yedam',
            'image'=>'/storage/images/staff/yedam.webp',
            'uuid'=>Str::uuid()->toString(),
            'status'=>'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ], 
        ]
    );
    }
}
