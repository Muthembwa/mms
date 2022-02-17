<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update1563866332689DarasasTable extends Migration
{
    public function up()
    {
        Schema::table('darasas', function (Blueprint $table) {
            $table->unsignedInteger('class_teacher_id');
            $table->foreign('class_teacher_id', 'class_teacher_fk_189192')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::table('darasas', function (Blueprint $table) {
        });
    }
}
