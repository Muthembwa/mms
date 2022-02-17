<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1562287295145StudentsTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('students')) {
            Schema::create('students', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('admission_number');
                $table->string('first_name');
                $table->string('last_name');
                $table->unsignedInteger('class_id');
                $table->foreign('class_id', 'class_fk_154961')->references('id')->on('darasas');
                $table->unsignedInteger('stream_id');
                $table->foreign('stream_id', 'stream_fk_154983')->references('id')->on('streams');
                $table->string('guardians_name');
                $table->string('guardians_phone_no')->nullable();
                $table->string('guardians_email');
                $table->unsignedInteger('subject_1_id');
                $table->foreign('subject_1_id', 'subject_1_fk_154968')->references('id')->on('subjects');
                $table->unsignedInteger('subject_2_id');
                $table->foreign('subject_2_id', 'subject_2_fk_154969')->references('id')->on('subjects');
                $table->unsignedInteger('subject_3_id');
                $table->foreign('subject_3_id', 'subject_3_fk_154970')->references('id')->on('subjects');
                $table->unsignedInteger('subject_4_id');
                $table->foreign('subject_4_id', 'subject_4_fk_154971')->references('id')->on('subjects');
                $table->unsignedInteger('subject_5_id')->nullable();
                $table->foreign('subject_5_id', 'subject_5_fk_154972')->references('id')->on('subjects');
                $table->unsignedInteger('subject_6_id')->nullable();
                $table->foreign('subject_6_id', 'subject_6_fk_154973')->references('id')->on('subjects');
                $table->unsignedInteger('subject_7_id')->nullable();
                $table->foreign('subject_7_id', 'subject_7_fk_154974')->references('id')->on('subjects');
                $table->unsignedInteger('subject_8_id')->nullable();
                $table->foreign('subject_8_id', 'subject_8_fk_154975')->references('id')->on('subjects');
                $table->unsignedInteger('subject_9_id')->nullable();
                $table->foreign('subject_9_id', 'subject_9_fk_154976')->references('id')->on('subjects');
                $table->unsignedInteger('subject_10_id')->nullable();
                $table->foreign('subject_10_id', 'subject_10_fk_154977')->references('id')->on('subjects');
                $table->unsignedInteger('subject_11_id')->nullable();
                $table->foreign('subject_11_id', 'subject_11_fk_154978')->references('id')->on('subjects');
                $table->unsignedInteger('subject_12_id')->nullable();
                $table->foreign('subject_12_id', 'subject_12_fk_154979')->references('id')->on('subjects');
                $table->unsignedInteger('subject_13_id')->nullable();
                $table->foreign('subject_13_id', 'subject_13_fk_154980')->references('id')->on('subjects');
                $table->unsignedInteger('subject_14_id')->nullable();
                $table->foreign('subject_14_id', 'subject_14_fk_154981')->references('id')->on('subjects');
                $table->unsignedInteger('subject_15_id')->nullable();
                $table->foreign('subject_15_id', 'subject_15_fk_154982')->references('id')->on('subjects');
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
}
