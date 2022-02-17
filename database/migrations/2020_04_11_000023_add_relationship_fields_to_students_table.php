<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToStudentsTable extends Migration
{
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->unsignedInteger('class_id');
            $table->foreign('class_id', 'class_fk_154961')->references('id')->on('darasas');
            $table->unsignedInteger('stream_id');
            $table->foreign('stream_id', 'stream_fk_154983')->references('id')->on('streams');
            $table->unsignedInteger('team_id')->nullable();
            $table->foreign('team_id', 'team_fk_155134')->references('id')->on('teams');
        });

    }
}
