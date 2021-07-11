<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preferences', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('minAge')->nullable();
            $table->string('maxAge')->nullable();
            $table->string('religion')->nullable();
            $table->string('family_status')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('have_children')->nullable(); 
            $table->string('minHeight')->nullable();
            $table->string('maxHeight')->nullable();
            $table->string('minWeight')->nullable();
            $table->string('maxWeight')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('hair_color')->nullable();
            $table->string('eye_color')->nullable();
            $table->string('skin_color')->nullable();
            $table->string('disabilities_status');            
            $table->string('education_level')->nullable();
            $table->string('subject')->nullable();
            $table->string('profession')->nullable();
            $table->string('country')->nullable();
            $table->string('district')->nullable();
            $table->string('citizenship')->nullable();
            $table->string('smoke_status')->nullable();;
            $table->string('alcohol_status')->nullable();;
            $table->string('diat_status')->nullable();;
            $table->string('language')->nullable();
            $table->string('details_you_prefer')->nullable();
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('preferences');
    }
}
