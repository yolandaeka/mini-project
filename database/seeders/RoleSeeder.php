<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama' => 'ADM PPIC',
                'keterangan' => 'Admin PPIC',
            ],
            [
                'nama' => 'ADM GUDANG',
                'keterangan' => 'Admin Gudang Bahan Baku',
            ],
            [
                'nama' => 'ADM PROD',
                'keterangan' => 'Admin Produksi Bahan Baku',
            ],
           

        ];

        DB::table('m_role')->insert($data);
    }
}
