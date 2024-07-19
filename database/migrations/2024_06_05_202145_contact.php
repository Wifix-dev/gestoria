<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts',function(Blueprint $table){
            $table->id();
            $table->longText('address');
            $table->string('phone');
            $table->string('suburb');
            $table->string('contact_schedule');
            $table->timestamps();
            $table->unsignedBigInteger('suburbs_id')->nullable();
            $table->foreign('suburbs_id')->references('id')->on('suburbs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
};
