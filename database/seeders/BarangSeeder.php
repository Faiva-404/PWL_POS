<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];

        for ($i = 1; $i <= 15; $i++) {
            $data[] = [
                'kategori_id' => rand(1,5),
                'supplier_id' => ceil($i / 5),
                'barang_kode' => 'BRG' . str_pad($i, 2, '0', STR_PAD_LEFT),
                'barang_nama' => 'Barang ' . $i,
                'harga_beli' => rand(1000,5000),
                'harga_jual' => rand(6000,10000),
            ];
        }

        DB::table('m_barang')->insert($data);
    }
}
