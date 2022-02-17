<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedInteger('school_name_id')->nullable();
            $table->foreign('school_name_id', 'school_name_fk_154934')->references('id')->on('schools');
            $table->unsignedInteger('team_id')->nullable();
            $table->foreign('team_id', 'team_fk_155040')->references('id')->on('teams');
        });

    }
}
