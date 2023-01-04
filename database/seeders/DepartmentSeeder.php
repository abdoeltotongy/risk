<?php

namespace Database\Seeders;
use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * 'Finance',
     */
    public function run()
    {
        Department::create(['name' => 'Admin']);
        // Department::create(['name' => 'Technical']);
        // Department::create(['name' => 'Commercial']);
        // Department::create(['name' => 'Procurement']);
        // Department::create(['name' => 'Legal']);
        // Department::create(['name' => 'Tax']);
        // Department::create(['name' => 'Market Prices']);
        // Department::create(['name' => 'Market Share']);
        // Department::create(['name' => 'Production Cost']);
        // Department::create(['name' => 'Market Oversupply']);
        // Department::create(['name' => 'FX']);
        // Department::create(['name' => 'Employees']);
        // Department::create(['name' => 'Competitors']);
    }
}