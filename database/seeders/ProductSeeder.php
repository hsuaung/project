<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert(
            [
                [
                    'name' => 'Sofa',
                    'category_id'=>1,
                    'staff_id'=>1,
                    'detail'=>'Sofa detail',
                    'price'=>2000,
                    'stock'=>10,
                    'description'=>'Sofa Description',
                    'feature'=>'feature',
                    'additioninfo'=>'Additional info',
                    'uuid' => Str::uuid()->toString(),
                    'status' => 'Active',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Bed',
                    'category_id'=>2,
                    'staff_id'=>1,
                    'detail'=>'Bed detail',
                    
                    'price'=>2000,
                    'stock'=>10,
                    'description'=>'Bed Description',
                    'feature'=>'feature',
                    'additioninfo'=>'Additional info',
                    'uuid' => Str::uuid()->toString(),
                    'status' => 'Active',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'lamp',
                    'category_id'=>3,
                    'staff_id'=>1,
                    'detail'=>'lamp detail',
                    'price'=>2000,
                    'stock'=>10,
                    'description'=>'lamp Description',
                    'feature'=>'feature',
                    'additioninfo'=>'Additional info',
                    'uuid' => Str::uuid()->toString(),
                    'status' => 'Active',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'table',
                    'category_id'=>4,
                    'staff_id'=>1,
                    'detail'=>'Bed detail',
                    
                    'price'=>2000,
                    'stock'=>10,
                    'description'=>' Description',
                    'feature'=>'feature',
                    'additioninfo'=>'Additional info',
                    'uuid' => Str::uuid()->toString(),
                    'status' => 'Active',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'cabinet',
                    'category_id'=>5,
                    'staff_id'=>1,
                    'detail'=>'Bed detail',
                    
                    'price'=>2000,
                    'stock'=>10,
                    'description'=>' Description',
                    'feature'=>'feature',
                    'additioninfo'=>'Additional info',
                    'uuid' => Str::uuid()->toString(),
                    'status' => 'Active',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Shelf',
                    'category_id'=>6,
                    'staff_id'=>1,
                    'detail'=>' detail',
                    
                    'price'=>2000,
                    'stock'=>10,
                    'description'=>' Description',
                    'feature'=>'feature',
                    'additioninfo'=>'Additional info',
                    'uuid' => Str::uuid()->toString(),
                    'status' => 'Active',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'name' => 'Chair',
                    'category_id'=>7,
                    'staff_id'=>1,
                    'detail'=>'Bed detail',
                    
                    'price'=>2000,
                    'stock'=>10,
                    'description'=>' Description',
                    'feature'=>'feature',
                    'additioninfo'=>'Additional info',
                    'uuid' => Str::uuid()->toString(),
                    'status' => 'Active',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]
        );
    }
}
