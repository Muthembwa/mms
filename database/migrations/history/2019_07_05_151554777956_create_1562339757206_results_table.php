<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1562339757206ResultsTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('results')) {
            Schema::create('results', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('student_id');
                $table->foreign('student_id', 'student_fk_156563')->references('id')->on('students');
                $table->unsignedInteger('exam_id');
                $table->foreign('exam_id', 'exam_fk_156564')->references('id')->on('exams');
                $table->integer('mean');
                $table->string('grade')->nullable();
                $table->unsignedInteger('team_id')->nullable();
                $table->foreign('team_id', 'team_fk_156570')->references('id')->on('teams');
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
