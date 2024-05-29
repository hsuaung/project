<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;




class OrderProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
        DB::table('order_products')->insert(
        [
        [
            'order_id'=>1,
                'product_id'=>2,
                'qty'=>1,
                'price'=>1000,
                'uuid'=>Str::uuid()->toString(),
                'status'=>'Active',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        ],    
        [
            'order_id'=>2,
                'product_id'=> 1,
                'qty'=>1,
                'price'=>1000 ,
                'uuid'=>Str::uuid()->toString(),
                'status'=>'Active',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        ], 
        ]
    );
    }
}
