<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class codeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('codes')->insert(
        [
        [
            'name' => 'LMP',
            'uuid'=>Str::uuid()->toString(),
            'status'=>'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],    
        [
            'name' => 'SOF',
            'uuid'=>Str::uuid()->toString(),
            'status'=>'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],     
        [
            'name' => 'CAB',
            'uuid'=>Str::uuid()->toString(),
            'status'=>'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],    
        [
            'name' => 'KIT',
            'uuid'=>Str::uuid()->toString(),
            'status'=>'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name' => 'OFF',
            'uuid'=>Str::uuid()->toString(),
            'status'=>'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],    
        [
            'name' => 'CHA',
            'uuid'=>Str::uuid()->toString(),
            'status'=>'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'name' => 'BD',
            'uuid'=>Str::uuid()->toString(),
            'status'=>'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],      
        ]
    );
    }
}
