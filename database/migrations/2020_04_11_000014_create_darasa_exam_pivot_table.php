<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDarasaExamPivotTable extends Migration
{
    public function up()
    {
        Schema::create('darasa_exam', function (Blueprint $table) {
            $table->unsignedInteger('exam_id');
            $table->foreign('exam_id', 'exam_id_fk_229153')->references('id')->on('exams')->onDelete('cascade');
            $table->unsignedInteger('darasa_id');
            $table->foreign('darasa_id', 'darasa_id_fk_229153')->references('id')->on('darasas')->onDelete('cascade');
        });

    }
}
