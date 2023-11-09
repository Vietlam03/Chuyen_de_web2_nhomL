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
        $this->call(AdminSeeder::class);

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
            'name' => "user1",
            'pass' => "123456",
        ]);
        DB::table('customers')->insert([
            'name' => "user2",
            'pass' => "123456",
        ]);

        DB::table('orders')->insert([
            'order_date' => "2023-11-05",
            'order_status' => 1,
            'order_total' => 40000,
            'customer_id' => 1,
        ]);
        DB::table('orders')->insert([
            'order_date' => "2023-11-05",
            'order_status' => 0,
            'order_total' => 60000,
            'customer_id' => 1,
        ]);
        DB::table('orders')->insert([
            'order_date' => "2023-11-05",
            'order_status' => 0,
            'order_total' => 80000,
            'customer_id' => 2,
        ]);

        DB::table('order_product')->insert([
            'product_id' => 1,
            'order_id' => 1,
            'quality' => 10,
            'unit_price' => 40000,
            'sub_total' => 40000,
        ]);
        DB::table('order_product')->insert([
            'product_id' => 2,
            'order_id' => 1,
            'quality' => 30,
            'unit_price' => 60000,
            'sub_total' => 60000,
        ]);
        DB::table('order_product')->insert([
            'product_id' => 3,
            'order_id' => 1,
            'quality' => 20,
            'unit_price' => 80000,
            'sub_total' => 80000,
        ]);
        DB::table('order_product')->insert([
            'product_id' => 2,
            'order_id' => 2,
            'quality' => 30,
            'unit_price' => 60000,
            'sub_total' => 60000,
        ]);
        DB::table('order_product')->insert([
            'product_id' => 1,
            'order_id' => 2,
            'quality' => 20,
            'unit_price' => 80000,
            'sub_total' => 80000,
        ]);

        DB::table('categories')->insert([
            'category_name' => 'Phone',

        ]);
        DB::table('categories')->insert([
            'category_name' => 'Tablet',

        ]);
        DB::table('categories')->insert([
            'category_name' => 'PC',

        ]);
        DB::table('category_product')->insert([
            'category_id' => '1',
            'product_id' =>  '1'

        ]);
        DB::table('category_product')->insert([
            'category_id' => '1',
            'product_id' =>  '2'

        ]);
        DB::table('category_product')->insert([
            'category_id' => '2',
            'product_id' =>  '2'

        ]);
        DB::table('category_product')->insert([
            'category_id' => '1',
            'product_id' =>  '3'

        ]);
    }
}
