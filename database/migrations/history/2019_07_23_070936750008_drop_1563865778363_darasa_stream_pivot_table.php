<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Drop1563865778363DarasaStreamPivotTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('darasa_stream');
    }

    public function down()
    {
        Schema::create('darasa_stream', function (Blueprint $table) {
            $table->unsignedInteger('darasa_id');
            $table->foreign('darasa_id', 'darasa_id_fk_157491')->references('id')->on('darasas');
            $table->unsignedInteger('stream_id');
            $table->foreign('stream_id', 'stream_id_fk_157491')->references('id')->on('streams');
        });
    }
}
