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
        Schema::create('vaccination', function (Blueprint $table) {
            $table->id();
            $table->date('administrationDate');
            $table->string('lote');
            $table->integer('dose');
            $table->unsignedBigInteger('vaccine_id');
            $table->unsignedBigInteger('veterinarian_id');

            $table->foreign('vaccine_id')->references('id')->on('vaccine');
            $table->foreign('veterinarian_id')->references('id')->on('veterinarian');


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
        Schema::dropIfExists('vaccination');
    }
};
