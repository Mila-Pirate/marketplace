<?php
namespace Database\Seeders;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Create a seller (user)
        $seller = User::create([
            'name' => 'Test Seller',
            'email' => 'seller@example.com',
            'password' => bcrypt('password'),
        ]);

        // Create a category
        $category = Category::create(['name' => 'Electronics']);

        // Create products
        Product::create([
            'name' => 'Smartphone',
            'description' => 'Latest model with 128GB storage.',
            'price' => 699.99,
            'category_id' => $category->id,
            'seller_id' => $seller->id,
            'stock' => 50,
            'image' => null,
        ]);
        Product::create([
            'name' => 'Laptop',
            'description' => 'High-performance laptop with 16GB RAM.',
            'price' => 1299.99,
            'category_id' => $category->id,
            'seller_id' => $seller->id,
            'stock' => 20,
            'image' => null,
        ]);
        Product::create([
            'name' => 'Headphones',
            'description' => 'Wireless noise-canceling headphones.',
            'price' => 199.99,
            'category_id' => $category->id,
            'seller_id' => $seller->id,
            'stock' => 100,
            'image' => null,
        ]);
    }
}