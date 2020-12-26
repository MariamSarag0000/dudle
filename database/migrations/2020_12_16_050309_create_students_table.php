<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
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
            $table->timestamps();

            $table->string('name_en');
            $table->string('name_ar');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('student_id')->unique();
            $table->string('password');
            $table->double('gpa', 3, 2);
            $table->smallInteger('units');
            $table->mediumText('address')->nullable();
            $table->string('image')->nullable();
            $table->date('birthdate')->nullable();
            $table->enum('status', ['student', 'alumni'])->default('student');
            $table->bigInteger('department_id')->unsigned();


            $table->foreign('department_id')->references('id')->on('departments')->onDelete("cascade")->onUpdate("cascade");
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
}
