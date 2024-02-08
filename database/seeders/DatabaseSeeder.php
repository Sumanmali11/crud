<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Product::factory(10000)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // for($i =0; $i <100 ; $i++){
        //     Product::create([
        //         'name' => 'Name' . $i,
        //         'price' => '100' . $i,
        //         'description' => 'description' . $i,
        //         'category_id' => 6,
        //         'color' => 'color' . $i,
        //     ]);
        // }
    }
}
