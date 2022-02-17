<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1562287291684SchoolLevelsTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('school_levels')) {
            Schema::create('school_levels', function (Blueprint $table) {
                $table->increments('id');
                $table->string('stage_name');
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('school_levels');
    }
}
