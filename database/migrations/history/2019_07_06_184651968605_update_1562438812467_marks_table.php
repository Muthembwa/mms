<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update1562438812467MarksTable extends Migration
{
    public function up()
    {
        Schema::table('marks', function (Blueprint $table) {
            $table->dropColumn('mathematics');
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
            $table->float('mathematics', 15, 2);
        });
    }

    public function down()
    {
        Schema::table('marks', function (Blueprint $table) {
        });
    }
}
