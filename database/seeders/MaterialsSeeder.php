<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaterialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_materials')->insert([
            [
                'nama' => 'Benang Polyester',
                'kode' => 'MAT001',
                'unit' => 'kg',
                'stok' => 500,
            ],
            [
                'nama' => 'Kain Spunbond',
                'kode' => 'MAT002',
                'unit' => 'roll',
                'stok' => 200,
            ],
            [
                'nama' => 'Lem Tekstil',
                'kode' => 'MAT003',
                'unit' => 'ltr',
                'stok' => 100,
            ],
            [
                'nama' => 'Kancing Plastik',
                'kode' => 'MAT004',
                'unit' => 'pack',
                'stok' => 300,
            ],
            [
                'nama' => 'Benang Nylon',
                'kode' => 'MAT005',
                'unit' => 'kg',
                'stok' => 450,
            ],
            [
                'nama' => 'Kain Katun',
                'kode' => 'MAT006',
                'unit' => 'roll',
                'stok' => 150,
            ],
            [
                'nama' => 'Cat Tekstil',
                'kode' => 'MAT007',
                'unit' => 'ltr',
                'stok' => 80,
            ],
            [
                'nama' => 'Resleting',
                'kode' => 'MAT008',
                'unit' => 'pack',
                'stok' => 120,
            ],
            [
                'nama' => 'Label Produk',
                'kode' => 'MAT009',
                'unit' => 'pack',
                'stok' => 600,
            ],
            [
                'nama' => 'Tali Polyester',
                'kode' => 'MAT010',
                'unit' => 'meter',
                'stok' => 1000,
            ],
        ]);
    }
}
