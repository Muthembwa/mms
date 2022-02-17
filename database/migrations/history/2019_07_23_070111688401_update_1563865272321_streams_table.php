<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update1563865272321StreamsTable extends Migration
{
    public function up()
    {
        Schema::table('streams', function (Blueprint $table) {
            $table->dropForeign('school_name_fk_154947');
            $table->dropColumn('school_name_id');
        });
    }

    public function down()
    {
        Schema::table('streams', function (Blueprint $table) {
        });
    }
}
