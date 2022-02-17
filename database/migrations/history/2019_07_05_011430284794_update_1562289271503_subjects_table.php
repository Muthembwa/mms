<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update1562289271503SubjectsTable extends Migration
{
    public function up()
    {
        Schema::table('subjects', function (Blueprint $table) {
            $table->dropForeign('team_fk_154956');
            $table->dropColumn('team_id');
        });
    }

    public function down()
    {
        Schema::table('subjects', function (Blueprint $table) {
        });
    }
}
