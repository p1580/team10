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
            $table->string('date',6)->default('2021-11-21')->comment('日期');
            $table->string('card_id')->comment('學生證卡號');
            $table->string('cid')->comment('教室編號');
            $table->string('start_at')->comment('借用節次');
            $table->string('end_of')->default(9)->comment('結束節次');
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