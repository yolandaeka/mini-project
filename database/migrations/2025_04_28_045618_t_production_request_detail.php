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
        Schema::create('t_production_request_detail', function(Blueprint $table){
            $table->id('id_prod_req_detail');
            $table->unsignedBigInteger('id_prod_req')->index();
            $table->unsignedBigInteger('id_materials')->index();
            $table->integer('quantity_interested');

            $table->foreign('id_prod_req')->references('id_prod_req')->on('t_production_request');
            $table->foreign('id_materials')->references('id_materials')->on('m_materials');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_production_request_detail');
    }
};
