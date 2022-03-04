<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         DB::statement('SET FOREIGN_KEY_CHECKS=0;');
//         \App\Models\User::factory(50)->create();
//         \App\Models\Merchant::factory(50)->create();
         \App\Models\Order::factory(50)->create();
//         \App\Models\OrderItem::factory(50)->create();
//         \App\Models\Product::factory(50)->create();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
