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
            $table->string('case_name');
            $table->longText('description');
            $table->json('initial_evidence')->nullable();
            $table->enum('status', ['En espera','Revisada','Aceptada','Rechazada','En proceso','Terminada','Pendiente a comentarios','Cerrada'])->default('En espera');
            $table->json('final_evidence')->nullable();
            $table->longText('final_comments')->nullable();
            $table->json('status_history')->nullable();
            $table->timestamps();

            //columnas
            $table->unsignedBigInteger('id_type_denouncement');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('manager_id')->nullable();
            $table->unsignedBigInteger('contact_id')->nullable();

            //referencias llaves foraneas
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('id_type_denouncement')->references('id')->on('type_denouncements');
            $table->foreign('manager_id')->references('id')->on('users');
            $table->foreign('contact_id')->references('id')->on('contacts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('denouncements');
    }
};
