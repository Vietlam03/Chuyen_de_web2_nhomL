<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('products')->insert([
            'name' => 'Iphone 14',
            'description' => 'lorem',
            'price' => 120,
            'image' => 'iphone-14promax.jpg',
            'quantity' => 2
        ]);
        DB::table('products')->insert([
            'name' => 'Iphone 13',
            'description' => 'lorem',
            'price' => 120,
            'image' => 'iphone-13promax.jpg',
            'quantity' => 2
        ]);
        DB::table('products')->insert([
            'name' => 'Iphone 12',
            'description' => 'lorem',
            'price' => 120,
            'image' => 'iphone-12promax.jpg',
            'quantity' => 2
        ]);
        DB::table('products')->insert([
            'name' => 'Ipad Air 13',
            'description' => 'lorem',
            'price' => 120,
            'image' => 'ipadair13.jpg',
            'quantity' => 2
        ]);
        DB::table('products')->insert([
            'name' => 'IPad Pro 12',
            'description' => 'lorem',
            'price' => 120,
            'image' => 'ipadpro12.jpg',
            'quantity' => 2
        ]);
        DB::table('products')->insert([
            'name' => 'SamSung A13',
            'description' => 'lorem',
            'price' => 120,
            'image' => 'samsunga13.jpg',
            'quantity' => 2
        ]);
        DB::table('products')->insert([
            'name' => 'Asus',
            'description' => 'lorem',
            'price' => 120,
            'image' => 'asus.jpg',
            'quantity' => 2
        ]);
        DB::table('products')->insert([
            'name' => 'Dell',
            'description' => 'lorem',
            'price' => 120,
            'image' => 'dell.jpg',
            'quantity' => 2
        ]);
        DB::table('categories')->insert([
            'name' => 'Phone',

        ]);
        DB::table('categories')->insert([
            'name' => 'Tablet',

        ]);
        DB::table('categories')->insert([
            'name' => 'PC',

        ]);

        DB::table('category_product')->insert([
            'category_id' => '1',
            'product_id' =>  '1',
            'test' => '1'
        ]);
        DB::table('category_product')->insert([
            'category_id' => '1',
            'product_id' =>  '2',
            'test' => '1'
        ]);
        DB::table('category_product')->insert([
            'category_id' => '2',
            'product_id' =>  '2',
            'test' => '1'
        ]);
        DB::table('category_product')->insert([
            'category_id' => '1',
            'product_id' =>  '3',
            'test' => '1'
        ]);
    }
}
