<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->unsignedBigInteger('department')->nullable();
            $table->unsignedBigInteger('classroom')->nullable();
            $table->string('address');
            $table->string('city');
            $table->timestamps();

            $table->foreign('department')->references('id')->on('departments');
            $table->foreign('classroom')->references('id')->on('classrooms');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
