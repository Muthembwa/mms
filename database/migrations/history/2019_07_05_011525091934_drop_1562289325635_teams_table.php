<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Drop1562289325635TeamsTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('teams');
    }
}
