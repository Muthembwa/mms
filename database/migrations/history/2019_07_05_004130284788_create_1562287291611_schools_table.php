<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1562287291611SchoolsTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('schools')) {
            Schema::create('schools', function (Blueprint $table) {
                $table->increments('id');
                $table->string('school_name');
                $table->string('sub_county');
                $table->unsignedInteger('level_id');
                $table->foreign('level_id', 'level_fk_154933')->references('id')->on('school_levels');
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('schools');
    }
}
