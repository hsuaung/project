<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Order_product;
use App\Models\Product;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Order_products_Seeder extends Seeder
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
            [
                'order_id'=>3,
                'product_id'=> 2,
                'qty'=>1,
                'price'=>1000,
                'uuid'=>Str::uuid()->toString(),
                'status'=>'Active',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], 
            [
                'order_id'=>4,
                'product_id'=> 1,
                'qty'=>1,
                'price'=>1000,
                'uuid'=>Str::uuid()->toString(),
                'status'=>'Active',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ], 
            [
                'order_id'=>5,
                'product_id'=> 2,
                'qty'=>1,
                'price'=>1000,
                'uuid'=>Str::uuid()->toString(),
                'status'=>'Active',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],     
            
        ]
        );
}
} 
        // $order=Order::first();
        // $product=Product::first();
        // Order_product::create([
        //    [
        //     'order_id'=>$order->id,
        //     'product_id'=>$product->id,
        //     'qty'=>22,
        //     'price'=>1011,
        //     'uuid'=>Str::uuid()->toString(),
        //     'status'=>'Active',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        //    ],
        //    [
        //     'order_id'=>$order->id,
        //     'product_id'=>$product->id,
        //     'qty'=>22,
        //     'price'=>1011,
        //     'uuid'=>Str::uuid()->toString(),
        //     'status'=>'Active',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        //    ],
        //    [
        //     'order_id'=>$order->id,
        //     'product_id'=>$product->id,
        //     'qty'=>22,
        //     'price'=>1011,
        //     'uuid'=>Str::uuid()->toString(),
        //     'status'=>'Active',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        //    ],
        //    [
        //     'order_id'=>$order->id,
        //     'product_id'=>$product->id,
        //     'qty'=>22,
        //     'price'=>1011,
        //     'uuid'=>Str::uuid()->toString(),
        //     'status'=>'Active',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        //    ],
        //    [
        //     'order_id'=>$order->id,
        //     'product_id'=>$product->id,
        //     'qty'=>22,
        //     'price'=>1011,
        //     'uuid'=>Str::uuid()->toString(),
        //     'status'=>'Active',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        //    ],
        //    [
        //     'order_id'=>$order->id,
        //     'product_id'=>$product->id,
        //     'qty'=>22,
        //     'price'=>1011,
        //     'uuid'=>Str::uuid()->toString(),
        //     'status'=>'Active',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        //    ],

        // ]);
    

        
        