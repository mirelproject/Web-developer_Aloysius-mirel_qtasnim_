<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'name' => 'Kopi',
                'stock' => 100,
                'sold' => 10,
                'transaction_date' => Carbon::createFromFormat('d-m-Y', '01-05-2021'),
                'category' => 'Konsumsi',
            ],
            [
                'name' => 'Teh',
                'stock' => 100,
                'sold' => 19,
                'transaction_date' => Carbon::createFromFormat('d-m-Y', '05-05-2021'),
                'category' => 'Konsumsi',
            ],
            [
                'name' => 'Kopi',
                'stock' => 90,
                'sold' => 15,
                'transaction_date' => Carbon::createFromFormat('d-m-Y', '10-05-2021'),
                'category' => 'Konsumsi',
            ],
            [
                'name' => 'Pasta Gigi',
                'stock' => 100,
                'sold' => 20,
                'transaction_date' => Carbon::createFromFormat('d-m-Y', '11-05-2021'),
                'category' => 'Pembersih',
            ],
            [
                'name' => 'Sabun Mandi',
                'stock' => 100,
                'sold' => 30,
                'transaction_date' => Carbon::createFromFormat('d-m-Y', '11-05-2021'),
                'category' => 'Pembersih',
            ],
            [
                'name' => 'Sampo',
                'stock' => 100,
                'sold' => 25,
                'transaction_date' => Carbon::createFromFormat('d-m-Y', '12-05-2021'),
                'category' => 'Pembersih',
            ],
            [
                'name' => 'Teh',
                'stock' => 81,
                'sold' => 5,
                'transaction_date' => Carbon::createFromFormat('d-m-Y', '12-05-2021'),
                'category' => 'Konsumsi',
            ],
        ];

        foreach ($products as $product) {
            DB::table('products')->insert([
                'name' => $product['name'],
                'stock' => $product['stock'],
                'sold' => $product['sold'],
                'transaction_date' => $product['transaction_date'],
                'category' => $product['category'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
