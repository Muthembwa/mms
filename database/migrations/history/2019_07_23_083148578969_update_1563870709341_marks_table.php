<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update1563870709341MarksTable extends Migration
{
    public function up()
    {
        Schema::table('marks', function (Blueprint $table) {
            $table->dropColumn('darasa');
            $table->dropColumn('stream');
        });
        Schema::table('marks', function (Blueprint $table) {
            $table->float('english', 15, 1)->change();
            $table->float('kiswahili', 15, 1)->change();
            $table->float('chemistry', 15, 1)->nullable()->change();
            $table->float('biology', 15, 1)->nullable()->change();
            $table->float('physics', 15, 1)->nullable()->change();
            $table->float('cre', 15, 1)->nullable()->change();
            $table->float('geography', 15, 1)->nullable()->change();
            $table->float('history', 15, 1)->nullable()->change();
            $table->float('computer_studies', 15, 1)->nullable()->change();
            $table->float('business_studies', 15, 1)->nullable()->change();
            $table->float('agriculture', 15, 1)->nullable()->change();
            $table->unsignedInteger('class_name_id');
            $table->foreign('class_name_id', 'class_name_fk_189261')->references('id')->on('darasas');
            $table->unsignedInteger('stream_id');
            $table->foreign('stream_id', 'stream_fk_189262')->references('id')->on('streams');
        });
    }

    public function down()
    {
        Schema::table('marks', function (Blueprint $table) {
        });
    }
}
