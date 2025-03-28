<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->date('dob'); // Date of birth
            $table->string('gender', 10);
            $table->string('contact', 15);
            $table->string('address', 255);
            $table->string('class', 50);
            $table->string('section', 10);
            $table->string('roll_number', 20)->unique();
            $table->string('marks', 500)->nullable(); // Store as JSON string
            $table->string('grade', 5)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
