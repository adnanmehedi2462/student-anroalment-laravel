<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_tbl', function (Blueprint $table) {
            $table->increments('student_id');
            $table->string('student_name');
            $table->string('student_rool');
            $table->string('student_fathersname');
            $table->string('student_mothersname');
            $table->string('student_email');
            $table->string('student_pass');
            $table->string('student_phone');
            $table->string('student_image');
            $table->string('student_year');
            $table->string('student_address');
            $table->string('student_admissionyear');
            $table->string('student_depertment');
          
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
        Schema::dropIfExists('student_tbl');
    }
}
