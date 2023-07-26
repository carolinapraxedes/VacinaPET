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
        Schema::create('pet', function (Blueprint $table) {
            $table->id();
            $table->string('name',140);
            $table->string('gender');
            $table->string('age');
            $table->string('color');        
            $table->string('RGA')->nullable();
            $table->text('description')->nullable();       
            $table->date('dateBirth')->nullable();

            $table->unsignedInteger('vaccination_id');
            $table->unsignedInteger('appointment_id');
            $table->unsignedInteger('breed_id');
            $table->unsignedInteger('specie_id');
            $table->unsignedInteger('tutor_id');


            $table->foreign('vaccination_id')->references('id')->on('vaccination');
            $table->foreign('appointment_id')->references('id')->on('appointment');
            $table->foreign('breed_id')->references('id')->on('breed');
            $table->foreign('specie_id')->references('id')->on('specie');
            $table->foreign('tutor_id')->references('id')->on('tutor');



            $table->softDeletes();
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
        Schema::dropIfExists('pet');
    }
};
