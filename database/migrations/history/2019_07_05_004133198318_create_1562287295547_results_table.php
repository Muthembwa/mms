<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1562287295547ResultsTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('results')) {
            Schema::create('results', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('exam_id');
                $table->foreign('exam_id', 'exam_fk_154993')->references('id')->on('exams');
                $table->unsignedInteger('student_id');
                $table->foreign('student_id', 'student_fk_154997')->references('id')->on('students');
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('results');
    }
}
