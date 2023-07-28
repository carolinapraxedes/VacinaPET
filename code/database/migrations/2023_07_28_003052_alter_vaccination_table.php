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
            $table->unsignedBigInteger('vaccine_id');
            $table->unsignedBigInteger('veterinarian_id');

            $table->foreign('vaccine_id')->references('id')->on('vaccine');
            $table->foreign('veterinarian_id')->references('id')->on('veterinarian');
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
            $table->dropForeign(['vaccine_id']);
            $table->dropForeign(['veterinarian_id']);
    
            // Remover as colunas
            $table->dropColumn('vaccine_id');
            $table->dropColumn('veterinarian_id');
        });
    }
};
