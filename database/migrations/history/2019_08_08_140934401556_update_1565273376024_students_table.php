<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update1565273376024StudentsTable extends Migration
{
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropForeign('subject_1_fk_154968');
            $table->dropColumn('subject_1_id');
            $table->dropForeign('subject_2_fk_154969');
            $table->dropColumn('subject_2_id');
            $table->dropForeign('subject_3_fk_154970');
            $table->dropColumn('subject_3_id');
            $table->dropForeign('subject_4_fk_154971');
            $table->dropColumn('subject_4_id');
            $table->dropForeign('subject_5_fk_154972');
            $table->dropColumn('subject_5_id');
            $table->dropForeign('subject_6_fk_154973');
            $table->dropColumn('subject_6_id');
            $table->dropForeign('subject_7_fk_154974');
            $table->dropColumn('subject_7_id');
            $table->dropForeign('subject_8_fk_154975');
            $table->dropColumn('subject_8_id');
            $table->dropForeign('subject_9_fk_154976');
            $table->dropColumn('subject_9_id');
            $table->dropForeign('subject_10_fk_154977');
            $table->dropColumn('subject_10_id');
            $table->dropForeign('subject_11_fk_154978');
            $table->dropColumn('subject_11_id');
            $table->dropForeign('subject_12_fk_154979');
            $table->dropColumn('subject_12_id');
            $table->dropForeign('subject_13_fk_154980');
            $table->dropColumn('subject_13_id');
            $table->dropForeign('subject_14_fk_154981');
            $table->dropColumn('subject_14_id');
            $table->dropForeign('subject_15_fk_154982');
            $table->dropColumn('subject_15_id');
        });
        Schema::table('students', function (Blueprint $table) {
            $table->string('guardians_phone_no')->nullable()->change();
            $table->integer('german')->nullable();
            $table->float('mathematics', 15, 1);
            $table->float('english', 15, 2);
            $table->float('kiswahili', 15, 2);
            $table->float('chemestry', 15, 2)->nullable();
            $table->float('biology', 15, 2)->nullable();
        });
    }

    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
        });
    }
}
