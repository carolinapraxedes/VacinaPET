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
        Schema::table('vaccination', function (Blueprint $table) {
            
            $table->string('rga');
            $table->unsignedBigInteger('pet_id');
            $table->unsignedBigInteger('vaccine_id');           
            $table->unsignedBigInteger('vaccination_location_id');
            $table->unsignedBigInteger('veterinarian_id');
            $table->unsignedBigInteger('tutor_id')->nullable();
            $table->unsignedBigInteger('appointment_id')->nullable();
            $table->unsignedBigInteger('users_id')->nullable();


            $table->foreign('pet_id')->references('id')->on('pet');
            $table->foreign('vaccine_id')->references('id')->on('vaccine');            
            $table->foreign('vaccination_location_id')->references('id')->on('vaccination_location');
            $table->foreign('veterinarian_id')->references('id')->on('veterinarian');
            $table->foreign('tutor_id')->references('id')->on('tutor');            
            $table->foreign('appointment_id')->references('id')->on('appointment');
            $table->foreign('users_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vaccination', function (Blueprint $table) {
            // Remover as chaves estrangeiras

            $table->dropForeign(['pet_id']);
            $table->dropForeign(['vaccine_id']);
            $table->dropForeign(['vaccination_location_id']);
            $table->dropForeign(['veterinarian_id']);
            $table->dropForeign(['tutor_id']);
            $table->dropForeign(['appointment_id']);
            $table->dropForeign(['users_id']);

            $table->dropColumn('rga');
            $table->dropColumn('pet_id');
            $table->dropColumn('vaccine_id');
            $table->dropColumn('vaccination_location_id');
            $table->dropColumn('veterinarian_id');
            $table->dropColumn('tutor_id');
            $table->dropColumn('appointment_id');
            $table->dropColumn('users_id');
        });
    }
};
