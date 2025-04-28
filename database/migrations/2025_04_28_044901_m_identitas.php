<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('m_identitas', function(Blueprint $table){
            $table->id('id_identitas');
            $table->string('NoPegawai',20)->unique();
            $table->string('nama', 255);
            $table->string('email', 150);
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->string('alamat', 200);
            $table->string('foto_profil',255);
            $table->timestamps();
        });
        
    }

    public function down(): void
    {
        Schema::dropIfExists('m_identitas');
    }
};
