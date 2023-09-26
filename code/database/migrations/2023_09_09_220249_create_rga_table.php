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
        Schema::create('rga', function (Blueprint $table) {
            $table->id();
            $table->string('rga')->nullable();
            $table->string('nameTutor');
            $table->string('emailTutor');
            $table->string('cpfTutor');
            $table->date('dateBirthTutor');
            $table->string('numberPhoneTutor');
            $table->unsignedBigInteger('ageTutor');


            $table->string('namePet');
            $table->string('genderPet');
            $table->date('dateBirthPet');
            $table->unsignedBigInteger('agePet');
            $table->unsignedBigInteger('speciePet_id');
            $table->unsignedBigInteger('breedPet_id');


            $table->unsignedBigInteger('colorPet_id');
            $table->unsignedBigInteger('sizePet_id');
            $table->unsignedBigInteger('coatPet_id');
            $table->unsignedBigInteger('profilePet_id');
            $table->unsignedBigInteger('provenancePet_id');
            $table->unsignedBigInteger('pet_id')->nullable();
            
            


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
        Schema::dropIfExists('rga');
    }
};
