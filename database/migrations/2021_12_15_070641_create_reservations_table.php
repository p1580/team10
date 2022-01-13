<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('date',191)->default('2021-11-21')->comment('日期');
            $table->string('card_id')->comment('學生證卡號');
            $table->string('cid')->comment('教室編號');
            $table->time('start_at')->nullable()->default('09:00')->comment('借用時間');
            $table->time('end_of')->nullable()->default('12:00')->comment('結束時間');
            $table->string('memo')->nullable()->comment('備註');
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
        Schema::dropIfExists('reservations');
    }
}