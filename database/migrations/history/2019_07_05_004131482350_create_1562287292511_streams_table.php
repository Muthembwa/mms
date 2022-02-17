<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1562287292511StreamsTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('streams')) {
            Schema::create('streams', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('school_name_id');
                $table->foreign('school_name_id', 'school_name_fk_154947')->references('id')->on('schools');
                $table->string('class_name');
                $table->unsignedInteger('darasa_name_id')->nullable();
                $table->foreign('darasa_name_id', 'darasa_name_fk_154948')->references('id')->on('darasas');
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('streams');
    }
}
