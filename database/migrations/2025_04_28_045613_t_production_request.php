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
        Schema::create('t_production_request', function(Blueprint $table){
            $table->id('id_prod_req');
            $table->unsignedBigInteger('requested_by')->index();
            $table->enum('status',['Approved', 'Pending', 'Rejected']);
            $table->string('keterangan', 100);

            $table->foreign('requested_by')->references('id_akun')->on('t_akun_user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_production_request');
    }
};
