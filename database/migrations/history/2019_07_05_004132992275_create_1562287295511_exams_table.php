<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1562287295511ExamsTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('exams')) {
            Schema::create('exams', function (Blueprint $table) {
                $table->increments('id');
                $table->string('exam_code');
                $table->string('exam_name');
                $table->date('start_date');
                $table->date('end_date')->nullable();
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('exams');
    }
}
