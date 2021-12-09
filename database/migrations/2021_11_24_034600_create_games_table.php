<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('name',191)->comment('遊戲名稱');
            $table->Integer('gid')->comment('遊戲類型編號');
            $table->string('platform')->comment('發售平台');
            $table->string('developer')->comment('開發商');
            $table->string('publisher')->comment('發行商');
            $table->date('releasedate')->default('2021-11-21')->nullable()->comment('發售月份');
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
        Schema::dropIfExists('games');
    }
}
