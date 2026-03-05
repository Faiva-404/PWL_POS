<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_supplier')->insert([
        [
            'supplier_kode' => 'SUP01',
            'supplier_nama' => 'PT Sumber Pangan',
            'supplier_alamat' => 'Jl. Mawar No. 1',
            'supplier_telp' => '081234567890'
        ],
        [
            'supplier_kode' => 'SUP02',
            'supplier_nama' => 'PT Makmur Jaya',
            'supplier_alamat' => 'Jl. Melati No. 2',
            'supplier_telp' => '082345678901'
        ],
        [
            'supplier_kode' => 'SUP03',
            'supplier_nama' => 'PT Sentosa Abadi',
            'supplier_alamat' => 'Jl. Kenanga No. 3',
            'supplier_telp' => '083456789012'
        ],
        ]);
    }
}
