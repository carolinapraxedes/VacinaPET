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
        Schema::table('pet', function (Blueprint $table) {
            $table->unsignedBigInteger('vaccination_id')->nullable();
            $table->unsignedBigInteger('appointment_id')->nullable();
            $table->unsignedBigInteger('breed_id')->nullable();
            $table->unsignedBigInteger('specie_id')->nullable();
            $table->unsignedBigInteger('tutor_id')->nullable();
    
            $table->foreign('vaccination_id')->references('id')->on('vaccination');
            $table->foreign('appointment_id')->references('id')->on('appointment');
            $table->foreign('breed_id')->references('id')->on('breed');
            $table->foreign('specie_id')->references('id')->on('specie');
            $table->foreign('tutor_id')->references('id')->on('tutor');

      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pet', function (Blueprint $table) {
            // Remover as chaves estrangeiras
            $table->dropForeign(['vaccination_id']);
            $table->dropForeign(['appointment_id']);
            $table->dropForeign(['breed_id']);
            $table->dropForeign(['specie_id']);
            $table->dropForeign(['tutor_id']);
    
            // Remover as colunas
            $table->dropColumn('vaccination_id');
            $table->dropColumn('appointment_id');
            $table->dropColumn('breed_id');
            $table->dropColumn('specie_id');
            $table->dropColumn('tutor_id');
        });
    }
};
