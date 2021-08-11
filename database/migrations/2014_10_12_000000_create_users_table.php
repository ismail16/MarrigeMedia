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
            $table->integer('u_id');
            $table->integer('package_price_id');
            $table->integer('role_id')->default(2);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('mobile')->unique();
            $table->string('email')->unique();
            $table->string('gender');
            $table->string('marital_status');
            $table->string('profession');
            $table->string('country');
            $table->string('district')->nullable();
            $table->string('birthday');
            $table->string('guardian_mobile')->nullable();
            $table->string('createdby');
            $table->string('religion');
            $table->string('social_order')->nullable();
            $table->string('looking_for');
            $table->string('address')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('verifyToken')->nullable();
            $table->string('agreement');
            $table->integer('activation')->default(0);
            $table->integer('status')->default(0);
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
