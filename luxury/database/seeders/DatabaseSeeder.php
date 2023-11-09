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
            'name'=>"sanpham1",
            'image'=>"sp1.png",
            'price'=>"39000",
            'description'=>"San pham lam tu....",
            'material'=>"kim cuong",
            'size'=>"12",
        ]);

        DB::table('products')->insert([
            'name'=>"sanpham1",
            'image'=>"sp1.png",
            'price'=>"39000",
            'description'=>"San pham lam tu....",
            'material'=>"kim cuong",
            'size'=>"12",
        ]);DB::table('products')->insert([
            'name'=>"sanpham1",
            'image'=>"sp1.png",
            'price'=>"39000",
            'description'=>"San pham lam tu....",
            'material'=>"kim cuong",
            'size'=>"12",
        ]);DB::table('products')->insert([
            'name'=>"sanpham1",
            'image'=>"sp1.png",
            'price'=>"39000",
            'description'=>"San pham lam tu....",
            'material'=>"kim cuong",
            'size'=>"12",
        ]);
    }
}
