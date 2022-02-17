<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1562287292063DarasasTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('darasas')) {
            Schema::create('darasas', function (Blueprint $table) {
                $table->increments('id');
                $table->string('class_name');
                $table->unsignedInteger('school_id');
                $table->foreign('school_id', 'school_fk_154937')->references('id')->on('schools');
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('darasas');
    }
}
