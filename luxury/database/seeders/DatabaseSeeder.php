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
            'name' => "SP1",
            'image' => "sp1.png",
            'price' => "10000",
            'description' => "sp1 là ...",
            'material' => "vàng",
            'size' => "13",
        ]);

        DB::table('order')->insert([
            'name' => "SP1",
            'image' => "sp1.png",
            'price' => "10000",
            'description' => "sp1 là ...",
            'material' => "vàng",
            'size' => "13",
        ]);
    }
}
