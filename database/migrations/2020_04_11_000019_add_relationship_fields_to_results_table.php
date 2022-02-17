<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToResultsTable extends Migration
{
    public function up()
    {
        Schema::table('results', function (Blueprint $table) {
            $table->unsignedInteger('student_id');
            $table->foreign('student_id', 'student_fk_156563')->references('id')->on('students');
            $table->unsignedInteger('exam_id');
            $table->foreign('exam_id', 'exam_fk_156564')->references('id')->on('exams');
            $table->unsignedInteger('team_id')->nullable();
            $table->foreign('team_id', 'team_fk_156570')->references('id')->on('teams');
            $table->unsignedInteger('class_id')->nullable();
            $table->foreign('class_id', 'class_fk_157513')->references('id')->on('darasas');
        });

    }
}
