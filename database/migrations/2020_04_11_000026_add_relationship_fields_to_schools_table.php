<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToSchoolsTable extends Migration
{
    public function up()
    {
        Schema::table('schools', function (Blueprint $table) {
            $table->unsignedInteger('level_id');
            $table->foreign('level_id', 'level_fk_154933')->references('id')->on('school_levels');
            $table->unsignedInteger('team_id')->nullable();
            $table->foreign('team_id', 'team_fk_155126')->references('id')->on('teams');
        });

    }
}
