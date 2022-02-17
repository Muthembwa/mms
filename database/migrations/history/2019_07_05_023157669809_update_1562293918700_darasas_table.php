<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update1562293918700DarasasTable extends Migration
{
    public function up()
    {
        Schema::table('darasas', function (Blueprint $table) {
            $table->unsignedInteger('team_id')->nullable();
            $table->foreign('team_id', 'team_fk_155128')->references('id')->on('teams');
        });
    }

    public function down()
    {
        Schema::table('darasas', function (Blueprint $table) {
        });
    }
}
