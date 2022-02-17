<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToMarksTable extends Migration
{
    public function up()
    {
        Schema::table('marks', function (Blueprint $table) {
            $table->unsignedInteger('team_id')->nullable();
            $table->foreign('team_id', 'team_fk_155136')->references('id')->on('teams');
            $table->unsignedInteger('adm_no_id')->nullable();
            $table->foreign('adm_no_id', 'adm_no_fk_228583')->references('id')->on('students');
        });

    }
}
