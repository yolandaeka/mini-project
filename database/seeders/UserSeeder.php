<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_identitas')->insert([
            [
                'NoPegawai' => 'PGW001',
                'nama' => 'Yolanda Ekaputri',
                'email' => 'yolanda@example.com',
                'jenis_kelamin' => 'perempuan',
                'alamat' => 'Jl. Mawar No. 123, Malang',
            ],
            [
                'NoPegawai' => 'PGW002',
                'nama' => 'Budi Santoso',
                'email' => 'budi@example.com',
                'jenis_kelamin' => 'laki-laki',
                'alamat' => 'Jl. Melati No. 45, Surabaya',
            ],
            [
                'NoPegawai' => 'PGW003',
                'nama' => 'Siti Nurhaliza',
                'email' => 'siti@example.com',
                'jenis_kelamin' => 'perempuan',
                'alamat' => 'Jl. Kenanga No. 8, Jakarta',
            ],
        ]);
    }
}
