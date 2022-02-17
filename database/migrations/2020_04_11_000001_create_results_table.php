<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mean');
            $table->string('grade')->nullable();
            $table->integer('rank')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

    }
}
