<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update1565273457449MarksTable extends Migration
{
    public function up()
    {
        Schema::table('marks', function (Blueprint $table) {
            $table->dropForeign('student_fk_155017');
            $table->dropColumn('student_id');
            $table->dropForeign('exam_fk_155020');
            $table->dropColumn('exam_id');
            $table->dropColumn('kiswahili');
            $table->dropColumn('chemistry');
            $table->dropColumn('biology');
            $table->dropColumn('physics');
            $table->dropColumn('cre');
            $table->dropColumn('geography');
            $table->dropColumn('history');
            $table->dropColumn('computer_studies');
            $table->dropColumn('business_studies');
            $table->dropColumn('agriculture');
            $table->dropColumn('english');
            $table->dropColumn('mathematics');
            $table->dropForeign('class_name_fk_189261');
            $table->dropColumn('class_name_id');
            $table->dropForeign('stream_fk_189262');
            $table->dropColumn('stream_id');
        });
        Schema::table('marks', function (Blueprint $table) {
            $table->unsignedInteger('adm_no_id')->nullable();
            $table->foreign('adm_no_id', 'adm_no_fk_228583')->references('id')->on('students');
        });
    }

    public function down()
    {
        Schema::table('marks', function (Blueprint $table) {
        });
    }
}
