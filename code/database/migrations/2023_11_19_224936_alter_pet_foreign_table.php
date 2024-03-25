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
            $table->unsignedBigInteger('color_id')->nullable();
             
    
            $table->foreign('color_id')->references('id')->on('color_pet');
            

      
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
            $table->dropForeign(['color_id']);
           
       
    
            // Remover as colunas
            $table->dropColumn('color_id');
         

        });
    }
};
