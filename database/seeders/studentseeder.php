<?php

namespace Database\Seeders;

use App\Models\student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class studentseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $student = new student();
        $student->first_name = 'John';
        $student->last_name = 'ali';
        $student->email = 'haider' . Str::random(2) . '@example.com';
        $student->phone = '07838844400';
        $student->department = Str::random(10);
        $student->classroom = Str::random(10);
        $student->address = Str::random(10);
        $student->city = Str::random(10);
        $student->save();
    }
}
