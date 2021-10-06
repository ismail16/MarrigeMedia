<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailExcelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_excels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->string('country')->nullable();
            $table->string('district')->nullable();
            $table->string('email');
            $table->string('age')->nullable();
            $table->string('year')->nullable();
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('email_excels');
    }
}
