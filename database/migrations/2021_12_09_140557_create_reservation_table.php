<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowclassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrowclass', function (Blueprint $table) {
            $table->id();
            $table->string('date',191)->comment('日期');
            $table->Integer('card_id')->comment('班級');
            $table->string('cid')->comment('教室');
            $table->string('start_at')->comment('借用時間');
            $table->string('end_of')->comment('結束時間');
            $table->date('memo')->comment('備註');
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
        Schema::dropIfExists('borrowclass');
    }
}
