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
            $table->text('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->bigInteger('gender_id')->unsigned();
            $table->foreign('gender_id')->references('id')->on('genders')->onDelete('cascade');
            $table->date('birth_date');
            $table->bigInteger('grade_id')->unsigned();
            $table->foreign('grade_id')->references('id')->on('grades')->onDelete('cascade');
            $table->bigInteger('classroom_id')->unsigned();
            $table->foreign('classroom_id')->references('id')->on('classrooms')->onDelete('cascade');
            $table->bigInteger('fee_id')->unsigned();
            $table->foreign('fee_id')->references('id')->on('fees')->onDelete('cascade');
            // $table->bigInteger('parent_id')->unsigned();
            // $table->foreign('parent_id')->references('id')->on('my__parents')->onDelete('cascade');
            $table->string('academic_year');

             //Father information
             $table->string('father_name'); // اسم الاب
             $table->string('employer')->nullable(); // جهة العمل
             $table->string('father_job'); // الوظيفة
             $table->string('father_phone'); // هاتف الاب
             $table->string('Jop_Phone')->nullable(); // هاتف العمل
             $table->string('home_phone')->nullable(); // هاتف المنزل
             $table->string('address'); // العنوان

             //Mother information
            $table->string('mother_name');
            $table->string('mother_phone')->nullable();
            $table->string('mother_job');

            $table->softDeletes();
            $table->timestamps();
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
