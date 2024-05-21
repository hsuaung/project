<?php

namespace Database\Seeders;


use App\Models\Order;
use App\Models\Customer;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrderSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $orders = [
      [
        'paymenttype' => 'COD',
        'customer_id' => 1,
        'totalprice' => 2000,
        'deliveryaddress' => 'Yangon',
        'buyerphone' => '0123456789',
        'buyername' => 'Kyaw Kyaw',
        'buyeremail' => 'email@gmail.com',
        'uuid' => Str::uuid()->toString(),
        'status' => 'Active'
      ],
      [
        'paymenttype' => 'COD',
        'customer_id' => 2,
        'totalprice' => 2000,
        'deliveryaddress' => 'Yangon',
        'buyerphone' => '0123456789',
        'buyername' => 'Kyaw Kyaw',
        'buyeremail' => 'email@gmail.com',
        'uuid' => Str::uuid()->toString(),
        'status' => 'Active'
      ],
      [
        'paymenttype' => 'COD',
        'customer_id' => 3,
        'totalprice' => 2000,
        'deliveryaddress' => 'Yangon',
        'buyerphone' => '0123456789',
        'buyername' => 'Kyaw Kyaw',
        'buyeremail' => 'email@gmail.com',
        'uuid' => Str::uuid()->toString(),
        'status' => 'Active'
      ],
      [
        'paymenttype' => 'COD',
        'customer_id' => 1,
        'totalprice' => 2000,
        'deliveryaddress' => 'Yangon',
        'buyerphone' => '0123456789',
        'buyername' => 'Kyaw Kyaw',
        'buyeremail' => 'email@gmail.com',
        'uuid' => Str::uuid()->toString(),
        'status' => 'Active'
      ]
    ];

    DB::table('orders')->insert($orders);
  }
}
