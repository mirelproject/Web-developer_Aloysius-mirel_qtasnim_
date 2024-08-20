<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Konsumsi', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Pembersih', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
