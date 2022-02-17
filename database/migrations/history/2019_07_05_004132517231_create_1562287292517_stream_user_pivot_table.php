<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1562287292517StreamUserPivotTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('stream_user')) {
            Schema::create('stream_user', function (Blueprint $table) {
                $table->unsignedInteger('stream_id');
                $table->foreign('stream_id', 'stream_id_fk_154946')->references('id')->on('streams');
                $table->unsignedInteger('user_id');
                $table->foreign('user_id', 'user_id_fk_154946')->references('id')->on('users');
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('stream_user');
    }
}
