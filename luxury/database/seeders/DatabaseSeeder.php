<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('products')->insert([
            'product_name' => "SP1",
            'product_image' => "sp1.png",
            'product_price' => "10000",
            'product_description' => "sp1 là ...",
            'product_material' => "vàng",
            'product_size' => "13",
        ]);
        DB::table('products')->insert([
            'product_name' => "sp2",
            'product_image' => "sp2.png",
            'product_price' => "10000",
            'product_description' => "sp2 là ...",
            'product_material' => "vàng",
            'product_size' => "13",
        ]);
        DB::table('products')->insert([
            'product_name' => "sp3",
            'product_image' => "sp3.png",
            'product_price' => "10000",
            'product_description' => "sp3 là ...",
            'product_material' => "vàng",
            'product_size' => "13",
        ]);

        DB::table('customers')->insert([
            'name' => "user",
            'pass' => "123456",
        ]);

        DB::table('order_details')->insert([
            'product_id' => 1,
            'customer_id' => 1,
            'quality' => 10,
            'unit_price' => 40000,
            'sub_total' => 40000,
        ]);
        DB::table('order_details')->insert([
            'product_id' => 2,
            'customer_id' => 1,
            'quality' => 30,
            'unit_price' => 60000,
            'sub_total' => 60000,
        ]);
        DB::table('order_details')->insert([
            'product_id' => 3,
            'customer_id' => 1,
            'quality' => 20,
            'unit_price' => 80000,
            'sub_total' => 80000,
        ]);
    }
}
