<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('admission_number');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('guardians_name');
            $table->string('guardians_phone_no')->nullable();
            $table->string('guardians_email');
            $table->float('mathematics', 15, 1);
            $table->float('english', 15, 2);
            $table->float('kiswahili', 15, 2);
            $table->float('chemestry', 15, 2)->nullable();
            $table->float('biology', 15, 2)->nullable();
            $table->float('physics', 15, 2)->nullable();
            $table->float('history_and_government', 15, 2)->nullable();
            $table->float('geography', 15, 2)->nullable();
            $table->float('religious_education', 15, 2)->nullable();
            $table->float('agriculture', 15, 2)->nullable();
            $table->float('business_studies', 15, 2)->nullable();
            $table->float('computer_science', 15, 2)->nullable();
            $table->float('art_and_design', 15, 2)->nullable();
            $table->float('home_science', 15, 2)->nullable();
            $table->float('aviation', 15, 2)->nullable();
            $table->float('french', 15, 2)->nullable();
            $table->float('german', 15, 2)->nullable();
            $table->float('arabic', 15, 2)->nullable();
            $table->float('music', 15, 2)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

    }
}
