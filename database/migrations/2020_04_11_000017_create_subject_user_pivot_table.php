<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectUserPivotTable extends Migration
{
    public function up()
    {
        Schema::create('subject_user', function (Blueprint $table) {
            $table->unsignedInteger('subject_id');
            $table->foreign('subject_id', 'subject_id_fk_154954')->references('id')->on('subjects')->onDelete('cascade');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id', 'user_id_fk_154954')->references('id')->on('users')->onDelete('cascade');
        });

    }
}
