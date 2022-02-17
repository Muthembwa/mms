<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDarasaStreamPivotTable extends Migration
{
    public function up()
    {
        Schema::create('darasa_stream', function (Blueprint $table) {
            $table->unsignedInteger('darasa_id');
            $table->foreign('darasa_id', 'darasa_id_fk_189233')->references('id')->on('darasas')->onDelete('cascade');
            $table->unsignedInteger('stream_id');
            $table->foreign('stream_id', 'stream_id_fk_189233')->references('id')->on('streams')->onDelete('cascade');
        });

    }
}
