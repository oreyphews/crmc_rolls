<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('c_number');
            $table->string('c_descr');
            $table->integer('grp_no');
            $table->string('c_day');
            $table->string('c_time');
            $table->string('c_code');
            $table->integer('c_dept');
            $table->integer('c_units');
            $table->integer('teacher_id');
            $table->string('num_studs');
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
        Schema::dropIfExists('courses');
    }
}
