<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('categories')->insert(
        [
        [
            'name' => 'Sofa',
            'image'=>'/storage/images/category/sofa.png',
            'uuid'=>Str::uuid()->toString(),

            'status'=>'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ], 
        [
            'name' => 'Bed',
            'image'=>'/storage/images/category/bed.png',
            'uuid'=>Str::uuid()->toString(),
            'status'=>'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],  
        [
            'name' => 'Lamp',
            'image'=>'/storage/images/category/lamp.png',
            'uuid'=>Str::uuid()->toString(),
            'status'=>'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],   
        [
            'name' => 'Table',
            'image'=>'/storage/images/category/table.png',
            'uuid'=>Str::uuid()->toString(),
            'status'=>'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ], 
        [
            'name' => 'Cabinet',
            'image'=>'/storage/images/category/cabinet.png',
            'uuid'=>Str::uuid()->toString(),
            'status'=>'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ], 
          
       
       
        [
            'name' => 'Shelf',
            'image'=>'/storage/images/category/shelf.png',
            'uuid'=>Str::uuid()->toString(),
            'status'=>'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ], 
        [
            'name' => 'Chair',
            'image'=>'/storage/images/category/chair.png',
            'uuid'=>Str::uuid()->toString(),
            'status'=>'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ], 
      
        ]
    );
    }
}
