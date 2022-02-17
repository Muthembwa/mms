<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update1562288148643MarksTable extends Migration
{
    public function up()
    {
        Schema::table('marks', function (Blueprint $table) {
            $table->dropForeign('subject_1_fk_154999');
            $table->dropColumn('subject_1_id');
            $table->dropForeign('subject_2_fk_155000');
            $table->dropColumn('subject_2_id');
            $table->dropForeign('subject_3_fk_155001');
            $table->dropColumn('subject_3_id');
            $table->dropForeign('subject_4_fk_155002');
            $table->dropColumn('subject_4_id');
            $table->dropForeign('subject_5_fk_155003');
            $table->dropColumn('subject_5_id');
            $table->dropForeign('subject_6_fk_155004');
            $table->dropColumn('subject_6_id');
            $table->dropForeign('subject_7_fk_155005');
            $table->dropColumn('subject_7_id');
            $table->dropForeign('subject_8_fk_155006');
            $table->dropColumn('subject_8_id');
            $table->dropForeign('subject_9_fk_155007');
            $table->dropColumn('subject_9_id');
            $table->dropForeign('subject_10_fk_155008');
            $table->dropColumn('subject_10_id');
            $table->dropForeign('subject_11_fk_155009');
            $table->dropColumn('subject_11_id');
            $table->dropForeign('subject_12_fk_155010');
            $table->dropColumn('subject_12_id');
            $table->dropForeign('subject_13_fk_155011');
            $table->dropColumn('subject_13_id');
            $table->dropForeign('subject_14_fk_155012');
            $table->dropColumn('subject_14_id');
            $table->dropForeign('subject_15_fk_155013');
            $table->dropColumn('subject_15_id');
        });
        Schema::table('marks', function (Blueprint $table) {
            $table->integer('english')->change();
            $table->float('kiswahili', 15, 2);
            $table->float('chemistry', 15, 2)->nullable();
            $table->float('biology', 15, 2)->nullable();
            $table->float('physics', 15, 2)->nullable();
            $table->float('cre', 15, 2)->nullable();
            $table->float('geography', 15, 2)->nullable();
            $table->float('history', 15, 2)->nullable();
            $table->float('computer_studies', 15, 2)->nullable();
            $table->float('business_studies', 15, 2)->nullable();
            $table->float('agriculture', 15, 2)->nullable();
        });
    }

    public function down()
    {
        Schema::table('marks', function (Blueprint $table) {
        });
    }
}
