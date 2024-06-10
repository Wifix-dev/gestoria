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
        Schema::create('denouncements',function(Blueprint $table){
            $table->id();
            $table->string('description');
            $table->integer('id_type_denouncement');
            $table->json('initial_evidence')->nullable();
            $table->enum('status', ['Sometida','En proceso','Pendiente a comentarios','Cerrada']);
            $table->json('final_evidence')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('user_id')->nullable(); // Clave foránea
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('denouncement');
    }
};
