<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update1562339456488ResultsTable extends Migration
{
    public function up()
    {
        Schema::table('results', function (Blueprint $table) {
            $table->dropForeign('exam_fk_154993');
            $table->dropColumn('exam_id');
            $table->dropForeign('student_fk_154997');
            $table->dropColumn('student_id');
        });
    }

    public function down()
    {
        Schema::table('results', function (Blueprint $table) {
        });
    }
}
