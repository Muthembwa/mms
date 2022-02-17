<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update1565293858029StudentsTable extends Migration
{
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->string('guardians_phone_no')->nullable()->change();
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
        });
    }

    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
        });
    }
}
