<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update1562293938230StreamsTable extends Migration
{
    public function up()
    {
        Schema::table('streams', function (Blueprint $table) {
            $table->unsignedInteger('team_id')->nullable();
            $table->foreign('team_id', 'team_fk_155130')->references('id')->on('teams');
        });
    }

    public function down()
    {
        Schema::table('streams', function (Blueprint $table) {
        });
    }
}
