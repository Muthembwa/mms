<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update1562295170873SubjectsTable extends Migration
{
    public function up()
    {
        Schema::table('subjects', function (Blueprint $table) {
            $table->dropColumn('subject_code');
        });
    }

    public function down()
    {
        Schema::table('subjects', function (Blueprint $table) {
        });
    }
}
