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
        Schema::create('m_materials', function(Blueprint $table){
            $table->id('id_materials');
            $table->string('nama', 200);
            $table->string('kode', 25)->unique();
            $table->string('unit',10);
            $table->integer('stok');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_materials');
        
    }
};
