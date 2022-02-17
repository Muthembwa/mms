<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update1563868114969DarasasTable extends Migration
{
    public function up()
    {
        Schema::table('darasas', function (Blueprint $table) {
            $table->dropForeign('class_teacher_fk_189192');
            $table->dropColumn('class_teacher_id');
        });
    }

    public function down()
    {
        Schema::table('darasas', function (Blueprint $table) {
        });
    }
}
