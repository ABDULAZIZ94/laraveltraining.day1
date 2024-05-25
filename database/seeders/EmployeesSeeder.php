<?php

namespace Database\Seeders;

use App\Models\Employees;
use Database\Factories\EmployeesFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employees::factory(50)->create();
    }
}

