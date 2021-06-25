<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username',255);
            $table->string('password',255);
            $table->string('first_name',255);
            $table->string('last_name',255);
            $table->integer('gender');
            $table->date('birthday');
            $table->string('phone_number',11);
            $table->string('email',300);
            $table->string('address',1500);
            $table->integer('permission');
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
        Schema::dropIfExists('staff');
    }
}
