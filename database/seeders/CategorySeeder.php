<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * 'Finance',
     */
    public function run()
    {
        Category::create(['name' => 'IT']);
        Category::create(['name' => 'Technical']);
        Category::create(['name' => 'Commercial']);
        Category::create(['name' => 'Procurement']);
        Category::create(['name' => 'Legal']);
        Category::create(['name' => 'Tax']);
        Category::create(['name' => 'Market Prices']);
        Category::create(['name' => 'Market Share']);
        Category::create(['name' => 'Production Cost']);
        Category::create(['name' => 'Market Oversupply']);
        Category::create(['name' => 'FX']);
        Category::create(['name' => 'Employees']);
        Category::create(['name' => 'Competitors']);
    }
}