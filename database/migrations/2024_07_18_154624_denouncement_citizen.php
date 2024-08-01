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
        Schema::create('denouncement_webs',function(Blueprint $table){

            $table->id();

            $table->string('case_name');
            $table->string('name');
            $table->string('last_name');
            $table->longText('description');
            $table->json('initial_evidence')->nullable();
            $table->enum('status', ['En espera','Revisada','Aceptada','Rechazada','En proceso','Terminada','Pendiente a comentarios','Cerrada'])->default('En espera');
            $table->json('final_evidence')->nullable();
            $table->longText('final_comments')->nullable();
            $table->string('key',11);
            $table->json('status_history')->nullable();
            $table->timestamps();

            $table->unsignedBigInteger('manager_id')->nullable();
            $table->foreign('manager_id')->references('id')->on('users');

            $table->unsignedBigInteger('contact_id')->nullable();
            $table->foreign('contact_id')->references('id')->on('contacts');

            $table->unsignedBigInteger('id_type_denouncement');
            $table->foreign('id_type_denouncement')->references('id')->on('type_denouncements');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('denouncement_webs');
    }
};
