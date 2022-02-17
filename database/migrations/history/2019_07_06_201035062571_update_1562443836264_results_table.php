<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update1562443836264ResultsTable extends Migration
{
    public function up()
    {
        Schema::table('results', function (Blueprint $table) {
            $table->unsignedInteger('class_id')->nullable();
            $table->foreign('class_id', 'class_fk_157513')->references('id')->on('darasas');
        });
    }

    public function down()
    {
        Schema::table('results', function (Blueprint $table) {
        });
    }
}
