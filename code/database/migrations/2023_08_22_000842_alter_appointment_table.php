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
        Schema::table('appointment', function (Blueprint $table) {
            
            $table->string('rga');
            $table->unsignedBigInteger('pet_id');

            $table->foreign('pet_id')->references('id')->on('pet');

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

            $table->dropColumn('rga');
            $table->dropColumn('pet_id');

        });
    }
};
