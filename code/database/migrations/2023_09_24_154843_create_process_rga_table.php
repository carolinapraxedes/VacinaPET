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
        Schema::create('process_rga', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rga_id');
            $table->date('requestDate');
            $table->unsignedBigInteger('status')->default(0);
            $table->date('analysisDate')->nullable();
            $table->string('reasonReject')->nullable();

            $table->foreign('rga_id')->references('id')->on('rga');

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
            $table->dropForeign(['rga_id']);

        });
        Schema::dropIfExists('process_rga');
    }
};
