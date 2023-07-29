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
        Schema::table('breed', function (Blueprint $table) {
            $table->unsignedBigInteger('specie_id')->default(2);
            $table->foreign('specie_id')->references('id')->on('specie');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('breed', function (Blueprint $table) {
            $table->dropForeign(['specie_id']);
            $table->dropColumn('specie_id');
        });
    }
};
