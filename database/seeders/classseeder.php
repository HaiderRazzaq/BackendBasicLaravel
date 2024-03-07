<?php

namespace Database\Seeders;

use App\Models\classroom;
use Illuminate\Database\Seeder;

class classseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        classroom::create(['class_name' => 'class name test seed', 'class_owner' => 'class owner test seed']);
    }
}
