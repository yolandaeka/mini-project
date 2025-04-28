<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('t_batch_material', function(Blueprint $table){
            $table->id('id_batch');
            $table->unsignedBigInteger('id_materials')->index();
            $table->string('batch_kode',100)->unique();
            $table->integer('quantiy');
            $table->timestamps();

            $table->foreign('id_materials')->references('id_materials')->on('m_materials');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       
    }
};
