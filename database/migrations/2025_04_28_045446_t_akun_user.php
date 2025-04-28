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
       Schema::create('t_akun_user', function(Blueprint $table){
        $table->id('id_akun');
        $table->unsignedBigInteger('id_identitas')->index();
        $table->unsignedBigInteger('id_role')->index();
        $table->string('uername',100)->unique();
        $table->string('password',100)->unique();
        $table->timestamps();

        $table->foreign('id_identitas')->references('id_identitas')->on('m_identitas');
        $table->foreign('id_role')->references('id_role')->on('m_role');
        
       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_akun_user');
    }
};
