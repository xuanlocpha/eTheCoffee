<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VoucherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voucher', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',300);
            $table->string('description',1500);
            $table->string('coupon_code',100);
            $table->string('qr_code',255);
            $table->date('start_date');
            $table->date('end_date');
            $table->string('disscount_unit',10);
            $table->integer('disscount');
            $table->integer('minimum_order');
            $table->integer('isRewardAllowed');
            $table->integer('isDirectApplication');
            $table->integer('reward_Point');
            $table->integer('status');
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
        Schema::dropIfExists('voucher');
    }
}
