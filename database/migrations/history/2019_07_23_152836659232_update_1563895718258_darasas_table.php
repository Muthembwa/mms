<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update1563895718258DarasasTable extends Migration
{
    public function up()
    {
        Schema::table('darasas', function (Blueprint $table) {
            $table->dropForeign('school_fk_154937');
            $table->dropColumn('school_id');
        });
    }

    public function down()
    {
        Schema::table('darasas', function (Blueprint $table) {
        });
    }
}
