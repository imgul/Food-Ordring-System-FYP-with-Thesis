<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // seed the categories table with the following food categories: 'Burgers', 'Pizza', 'Pasta', 'Salads', 'Desserts', 'Drinks', 'Sides', 'Appetizers', 'Breakfast', 'Sandwiches', 'Soups', 'Entrees', 'Sushi', 'Tacos', 'Wings', 'Wraps', 'Beverages', 'Bread', 'Cakes', 'Candy', 'Casseroles', 'Cheese', 'Cookies', 'Dips', 'Doughs', 'Dressings', 'Fruit', 'Grains', 'Ice Cream', 'Jams', 'Jellies', 'Meat', 'Muffins', 'Nuts', 'Pancakes', 'Pies', 'Puddings', 'Sauces', 'Seafood', 'Seasonings', 'Snacks', 'Spices', 'Vegetables', 'Veggies', 'Yogurt', 'Other'
        \App\Models\Categories::create(['Category_name' => 'Burgers']);
        \App\Models\Categories::create(['Category_name' => 'Pizza']);
        \App\Models\Categories::create(['Category_name' => 'Pasta']);
        \App\Models\Categories::create(['Category_name' => 'Salads']);
        \App\Models\Categories::create(['Category_name' => 'Desserts']);
        \App\Models\Categories::create(['Category_name' => 'Drinks']);
        \App\Models\Categories::create(['Category_name' => 'Sides']);
        \App\Models\Categories::create(['Category_name' => 'Appetizers']);
        \App\Models\Categories::create(['Category_name' => 'Breakfast']);
        \App\Models\Categories::create(['Category_name' => 'Sandwiches']);
        \App\Models\Categories::create(['Category_name' => 'Soups']);
        \App\Models\Categories::create(['Category_name' => 'Entrees']);
        \App\Models\Categories::create(['Category_name' => 'Sushi']);
        \App\Models\Categories::create(['Category_name' => 'Tacos']);
        \App\Models\Categories::create(['Category_name' => 'Wings']);
        \App\Models\Categories::create(['Category_name' => 'Wraps']);
        \App\Models\Categories::create(['Category_name' => 'Beverages']);
        \App\Models\Categories::create(['Category_name' => 'Bread']);
        \App\Models\Categories::create(['Category_name' => 'Cakes']);
        \App\Models\Categories::create(['Category_name' => 'Candy']);
        \App\Models\Categories::create(['Category_name' => 'Casseroles']);
        \App\Models\Categories::create(['Category_name' => 'Cheese']);
        \App\Models\Categories::create(['Category_name' => 'Cookies']);
        \App\Models\Categories::create(['Category_name' => 'Dips']);
        \App\Models\Categories::create(['Category_name' => 'Doughs']);
        \App\Models\Categories::create(['Category_name' => 'Dressings']);
        \App\Models\Categories::create(['Category_name' => 'Fruit']);
        \App\Models\Categories::create(['Category_name' => 'Grains']);
        \App\Models\Categories::create(['Category_name' => 'Ice Cream']);
        \App\Models\Categories::create(['Category_name' => 'Jams']);
        \App\Models\Categories::create(['Category_name' => 'Jellies']);
        \App\Models\Categories::create(['Category_name' => 'Meat']);
        \App\Models\Categories::create(['Category_name' => 'Muffins']);
        \App\Models\Categories::create(['Category_name' => 'Nuts']);
        \App\Models\Categories::create(['Category_name' => 'Pancakes']);
        \App\Models\Categories::create(['Category_name' => 'Pies']);
        \App\Models\Categories::create(['Category_name' => 'Puddings']);
        \App\Models\Categories::create(['Category_name' => 'Sauces']);
        \App\Models\Categories::create(['Category_name' => 'Seafood']);
        \App\Models\Categories::create(['Category_name' => 'Seasonings']);
        \App\Models\Categories::create(['Category_name' => 'Snacks']);
        \App\Models\Categories::create(['Category_name' => 'Spices']);
        \App\Models\Categories::create(['Category_name' => 'Vegetables']);
        \App\Models\Categories::create(['Category_name' => 'Veggies']);
        \App\Models\Categories::create(['Category_name' => 'Yogurt']);
        \App\Models\Categories::create(['Category_name' => 'Other']);


        // Products Seeder
        \App\Models\Products::create(['Product_name' => 'Burger', 'Description' => 'A delicious burger', 'Price' => 5.99, 'Image' => 'burger.jpg', 'Category' => 1]);
        \App\Models\Products::create(['Product_name' => 'Pizza', 'Description' => 'A delicious pizza', 'Price' => 6.99, 'Image' => 'pizza.jpg', 'Category' => 2]);
        \App\Models\Products::create(['Product_name' => 'Pasta', 'Description' => 'A delicious pasta', 'Price' => 7.99, 'Image' => 'Dumplings.jpg', 'Category' => 3]);
        \App\Models\Products::create(['Product_name' => 'Salad', 'Description' => 'A delicious salad', 'Price' => 8.99, 'Image' => '1669562677.noodles.jpg', 'Category' => 4]);
        \App\Models\Products::create(['Product_name' => 'Dessert', 'Description' => 'A delicious dessert', 'Price' => 9.99, 'Image' => '1669626587.pizza-2-LA.jpg', 'Category' => 5]);
        \App\Models\Products::create(['Product_name' => 'Drink', 'Description' => 'A delicious drink', 'Price' => 10.99, 'Image' => '1669627151.noddels-4-prawns.jpg', 'Category' => 6]);
        \App\Models\Products::create(['Product_name' => 'Side', 'Description' => 'A delicious side', 'Price' => 11.99, 'Image' => '1669628029.dumplings-2-beef.jpg', 'Category' => 7]);
        \App\Models\Products::create(['Product_name' => 'Appetizer', 'Description' => 'A delicious appetizer', 'Price' => 12.99, 'Image' => 'pizza.jpg', 'Category' => 8]);
        \App\Models\Products::create(['Product_name' => 'Breakfast', 'Description' => 'A delicious breakfast', 'Price' => 13.99, 'Image' => '1669628029.dumplings-2-beef.jpg', 'Category' => 9]);
        \App\Models\Products::create(['Product_name' => 'Sandwich', 'Description' => 'A delicious sandwich', 'Price' => 14.99, 'Image' => 'sandwich.jpg', 'Category' => 10]);
        \App\Models\Products::create(['Product_name' => 'Soup', 'Description' => 'A delicious soup', 'Price' => 15.99, 'Image' => 'burger.jpg', 'Category' => 11]);
    }
}
