<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update1562339384273ResultsTable extends Migration
{
    public function up()
    {
        Schema::table('results', function (Blueprint $table) {
            $table->dropForeign('team_fk_155137');
            $table->dropColumn('team_id');
        });
    }

    public function down()
    {
        Schema::table('results', function (Blueprint $table) {
        });
    }
}
