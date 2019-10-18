<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootballmatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footballmatches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('comandOne');
            $table->string('comandTwo');
            $table->string('matchtime');
            $table->string('url');
            $table->mediumText('htmlblock');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('footballmatches');
    }
}
