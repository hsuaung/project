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
                    'name' => 'Bed',
                    'category_id'=>2,
                    'staff_id'=>1,
                    'detail'=>'Bed detail',
                    'code_name'=>'Bed',
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
                    'name' => 'Bed',
                    'category_id'=>2,
                    'staff_id'=>2,
                    'detail'=>'Bed detail',
                    'code_name'=>'Bed',
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
                    'name' => 'Bed',
                    'category_id'=>2,
                    'staff_id'=>3,
                    'detail'=>'Bed detail',
                    'code_name'=>'Bed',
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
                    'name' => 'Bed',
                    'category_id'=>3,
                    'staff_id'=>4,
                    'detail'=>'Bed detail',
                    'code_name'=>'Bed',
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
            ]
        );
    }
}
