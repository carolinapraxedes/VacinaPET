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

            $table->foreign('speciePet_id')->references('id')->on('specie');
            $table->foreign('breedPet_id')->references('id')->on('breed');            
            $table->foreign('colorPet_id')->references('id')->on('color_pet');
            $table->foreign('sizePet_id')->references('id')->on('size_pet');
            $table->foreign('coatPet_id')->references('id')->on('coat_pet');            
            $table->foreign('profilePet_id')->references('id')->on('profile_pet');
            $table->foreign('provenancePet_id')->references('id')->on('provenance_pet');
            $table->foreign('pet_id')->references('id')->on('pet');            
 
            
            


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
        Schema::table('rga', function (Blueprint $table) {
            $table->dropForeign(['speciePet_id']);
            $table->dropForeign(['breedPet_id']);
            $table->dropForeign(['colorPet_id']);
            $table->dropForeign(['sizePet_id']);
            $table->dropForeign(['coatPet_id']);
            $table->dropForeign(['profilePet_id']);
            $table->dropForeign(['provenancePet_id']);
            $table->dropForeign(['pet_id']);
        });
    
        Schema::dropIfExists('rga');
    }
};
