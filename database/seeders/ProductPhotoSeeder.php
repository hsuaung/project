<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductPhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
        DB::table('product_photos')->insert(
        [
        [
            'isPrimary' => 1,
            'name' => 'sofa',
            'product_id' => 1,
            'image'=>'/storage/images/products/sofa1.1.png',
            'uuid'=>Str::uuid()->toString(),
            'status'=>'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'isPrimary' => 0,
            'name' => 'sofa',
            'product_id' => 1,
            'image'=>'/storage/images/products/sofa1.2.png',
            'uuid'=>Str::uuid()->toString(),
            'status'=>'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'isPrimary' => 0,
            'name' => 'sofa',
            'product_id' => 1,
            'image'=>'/storage/images/products/sofa1.3.png',
            'uuid'=>Str::uuid()->toString(),
            'status'=>'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ], 

        [
            'isPrimary' => 1,
            'name' => 'bed',
            'product_id' => 2,
            'image'=>'/storage/images/products/bed1.1.png',
            'uuid'=>Str::uuid()->toString(),
            'status'=>'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'isPrimary' => 0,
            'name' => 'bed',
            'product_id' => 2,
            'image'=>'/storage/images/products/bed1.2.png',
            'uuid'=>Str::uuid()->toString(),
            'status'=>'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'isPrimary' => 0,
            'name' => 'bed',
            'product_id' => 2,
            'image'=>'/storage/images/products/bed1.3.png',
            'uuid'=>Str::uuid()->toString(),
            'status'=>'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'isPrimary' => 1,
            'name' => 'lamp',
            'product_id' => 3,
            'image'=>'/storage/images/products/lamp1.1.png',
            'uuid'=>Str::uuid()->toString(),
            'status'=>'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'isPrimary' => 0,
            'name' => 'lamp',
            'product_id' => 3,
            'image'=>'/storage/images/products/lamp1.2.png',
            'uuid'=>Str::uuid()->toString(),
            'status'=>'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'isPrimary' => 0,
            'name' => 'lamp',
            'product_id' => 3,
            'image'=>'/storage/images/products/lamp1.3.png',
            'uuid'=>Str::uuid()->toString(),
            'status'=>'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'isPrimary' => 1,
            'name' => 'table',
            'product_id' =>4 ,
            'image'=>'/storage/images/products/table1.1.png',
            'uuid'=>Str::uuid()->toString(),
            'status'=>'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'isPrimary' => 0,
            'name' => 'table',
            'product_id' => 4,
            'image'=>'/storage/images/products/table1.2.png',
            'uuid'=>Str::uuid()->toString(),
            'status'=>'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'isPrimary' => 0,
            'name' => 'table',
            'product_id' => 4,
            'image'=>'/storage/images/products/table1.3.png',
            'uuid'=>Str::uuid()->toString(),
            'status'=>'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'isPrimary' => 1,
            'name' => 'cabinet',
            'product_id' => 5,
            'image'=>'/storage/images/products/cabinet1.1.png',
            'uuid'=>Str::uuid()->toString(),
            'status'=>'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'isPrimary' => 0,
            'name' => 'cabinet',
            'product_id' =>5,
            'image'=>'/storage/images/products/cabinet1.2.png',
            'uuid'=>Str::uuid()->toString(),
            'status'=>'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'isPrimary' => 0,
            'name' => 'cabinet',
            'product_id' => 5,
            'image'=>'/storage/images/products/cabinet1.3.png',
            'uuid'=>Str::uuid()->toString(),
            'status'=>'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'isPrimary' => 1,
            'name' => 'shelf',
            'product_id' => 6,
            'image'=>'/storage/images/products/shelf1.1.png',
            'uuid'=>Str::uuid()->toString(),
            'status'=>'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'isPrimary' => 0,
            'name' => 'shelf',
            'product_id' => 6,
            'image'=>'/storage/images/products/cabinet1.2.png',
            'uuid'=>Str::uuid()->toString(),
            'status'=>'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'isPrimary' => 0,
            'name' => 'shelf',
            'product_id' => 6,
            'image'=>'/storage/images/products/cabinet1.3.png',
            'uuid'=>Str::uuid()->toString(),
            'status'=>'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'isPrimary' => 1,
            'name' => 'chair',
            'product_id' => 7,
            'image'=>'/storage/images/products/chair1.1.png',
            'uuid'=>Str::uuid()->toString(),
            'status'=>'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'isPrimary' => 0,
            'name' => 'shelf',
            'product_id' => 7,
            'image'=>'/storage/images/products/chair1.2.png',
            'uuid'=>Str::uuid()->toString(),
            'status'=>'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],
        [
            'isPrimary' => 0,
            'name' => 'shelf',
            'product_id' => 7,
            'image'=>'/storage/images/products/chair1.3.png',
            'uuid'=>Str::uuid()->toString(),
            'status'=>'Active',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ],

    ] );
}
}

