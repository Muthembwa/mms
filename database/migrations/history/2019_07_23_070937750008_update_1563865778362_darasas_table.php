<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update1563865778362DarasasTable extends Migration
{
    public function up()
    {
        Schema::table('darasas', function (Blueprint $table) {
        });
        Schema::table('darasas', function (Blueprint $table) {
            $table->unsignedInteger('stream_id');
            $table->foreign('stream_id', 'stream_fk_189148')->references('id')->on('streams');
        });
    }

    public function down()
    {
        Schema::table('darasas', function (Blueprint $table) {
        });
    }
}
