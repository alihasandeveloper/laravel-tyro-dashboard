<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $category = Category::firstOrCreate(
            ['slug' => 'electronics'],
            ['name' => 'Electronics']
        );

        Product::create([
            'title' => 'Sample Phone',
            'price' => 499.99,
            'description' => 'A sample smartphone for verification.',
            'category_id' => $category->id,
            'is_published' => true,
        ]);
    }
}
