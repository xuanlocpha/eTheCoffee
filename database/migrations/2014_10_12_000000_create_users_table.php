<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');  
            $table->string('first_name',255); 
            $table->string('last_name',255);
            $table->integer('gender');
            $table->date('birthday');
            $table->string('phone_number',11)->unique();
            $table->string('email',500)->unique();
            $table->string('password',500);
            $table->string('avatar',1000)->nullable();
            $table->string('address',1000)->nullable();
            $table->integer('level')->nullable();
            $table->integer('point')->nullable();
            $table->string('qr_code',500)->nullable();
            $table->integer('status')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
