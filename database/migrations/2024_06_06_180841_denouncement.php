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
            $table->enum('status', ['En espera','Revisada','Aceptada','Rechazada','En proceso','Terminada','Pendiente a comentarios','Cerrada'])->default('En espera');
            $table->json('final_evidence')->nullable();
            $table->timestamps();
            //columnas
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('manager_id')->nullable();
            //referencias llaves foraneas
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('manager_id')->references('id')->on('users');
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
