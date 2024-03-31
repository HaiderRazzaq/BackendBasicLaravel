<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\student;

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
        $student->department_id = rand(1,100);
        $student->classroom_id = rand(1,100);
        $student->address = Str::random(10);
        $student->city = Str::random(10);
        // $student->user_id=2;
        $student->save();
    }
}
