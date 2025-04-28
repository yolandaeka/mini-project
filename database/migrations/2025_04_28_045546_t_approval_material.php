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
        Schema::create('t_approval_material', function(Blueprint $table){
            $table->id('id_approval_material');
            $table->unsignedBigInteger('id_prod_req')->index();
            $table->unsignedBigInteger('approved_by')->index();
            $table->date('tgl_kirim');
            $table->timestamps();

            $table->foreign('approved_by')->references('id_akun')->on('t_akun_user');
            $table->foreign('id_prod_req')->references('id_prod_req')->on('t_production_request');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_approval_material');
    }
};
