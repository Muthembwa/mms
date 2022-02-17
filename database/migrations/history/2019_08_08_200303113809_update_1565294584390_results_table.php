<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update1565294584390ResultsTable extends Migration
{
    public function up()
    {
        Schema::table('results', function (Blueprint $table) {
            $table->integer('rank')->nullable();
        });
    }

    public function down()
    {
        Schema::table('results', function (Blueprint $table) {
        });
    }
}
