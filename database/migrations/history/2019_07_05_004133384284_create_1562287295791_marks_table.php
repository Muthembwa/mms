<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1562287295791MarksTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('marks')) {
            Schema::create('marks', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('exam_id')->nullable();
                $table->foreign('exam_id', 'exam_fk_155020')->references('id')->on('exams');
                $table->unsignedInteger('student_id');
                $table->foreign('student_id', 'student_fk_155017')->references('id')->on('students');
                $table->string('stream')->nullable();
                $table->string('darasa')->nullable();
                $table->unsignedInteger('subject_1_id');
                $table->foreign('subject_1_id', 'subject_1_fk_154999')->references('id')->on('subjects');
                $table->unsignedInteger('subject_2_id');
                $table->foreign('subject_2_id', 'subject_2_fk_155000')->references('id')->on('subjects');
                $table->unsignedInteger('subject_3_id');
                $table->foreign('subject_3_id', 'subject_3_fk_155001')->references('id')->on('subjects');
                $table->unsignedInteger('subject_4_id');
                $table->foreign('subject_4_id', 'subject_4_fk_155002')->references('id')->on('subjects');
                $table->unsignedInteger('subject_5_id')->nullable();
                $table->foreign('subject_5_id', 'subject_5_fk_155003')->references('id')->on('subjects');
                $table->unsignedInteger('subject_6_id')->nullable();
                $table->foreign('subject_6_id', 'subject_6_fk_155004')->references('id')->on('subjects');
                $table->unsignedInteger('subject_7_id')->nullable();
                $table->foreign('subject_7_id', 'subject_7_fk_155005')->references('id')->on('subjects');
                $table->unsignedInteger('subject_8_id')->nullable();
                $table->foreign('subject_8_id', 'subject_8_fk_155006')->references('id')->on('subjects');
                $table->unsignedInteger('subject_9_id')->nullable();
                $table->foreign('subject_9_id', 'subject_9_fk_155007')->references('id')->on('subjects');
                $table->unsignedInteger('subject_10_id')->nullable();
                $table->foreign('subject_10_id', 'subject_10_fk_155008')->references('id')->on('subjects');
                $table->unsignedInteger('subject_11_id')->nullable();
                $table->foreign('subject_11_id', 'subject_11_fk_155009')->references('id')->on('subjects');
                $table->unsignedInteger('subject_12_id')->nullable();
                $table->foreign('subject_12_id', 'subject_12_fk_155010')->references('id')->on('subjects');
                $table->unsignedInteger('subject_13_id')->nullable();
                $table->foreign('subject_13_id', 'subject_13_fk_155011')->references('id')->on('subjects');
                $table->unsignedInteger('subject_14_id')->nullable();
                $table->foreign('subject_14_id', 'subject_14_fk_155012')->references('id')->on('subjects');
                $table->unsignedInteger('subject_15_id')->nullable();
                $table->foreign('subject_15_id', 'subject_15_fk_155013')->references('id')->on('subjects');
                $table->integer('mathematics');
                $table->integer('english')->nullable();
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('marks');
    }
}
