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
        Schema::table('rga', function (Blueprint $table) {
            $table->unsignedBigInteger('process_id')->after('pet_id')->nullable();
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
            // Drop a column named 'process_id'
            $table->dropColumn('process_id');
        });
        
    }
};
