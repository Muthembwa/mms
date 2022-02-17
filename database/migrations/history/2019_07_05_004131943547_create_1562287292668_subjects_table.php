<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1562287292668SubjectsTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('subjects')) {
            Schema::create('subjects', function (Blueprint $table) {
                $table->increments('id');
                $table->string('subject_name');
                $table->string('subject_code');
                $table->unsignedInteger('team_id')->nullable();
                $table->foreign('team_id', 'team_fk_154956')->references('id')->on('teams');
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('subjects');
    }
}
