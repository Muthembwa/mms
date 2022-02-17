<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDarasasTable extends Migration
{
    public function up()
    {
        Schema::create('darasas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('class_name');
            $table->timestamps();
            $table->softDeletes();
        });

    }
}
