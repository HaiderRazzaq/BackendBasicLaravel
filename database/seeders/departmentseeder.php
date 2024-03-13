<?php

namespace Database\Seeders;

use App\Models\department;
use Illuminate\Database\Seeder;

class departmentseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        department::create(['department_name' => 'Department name seeding', 'department_owner' => 'Department owner seeding']);
    }
}
