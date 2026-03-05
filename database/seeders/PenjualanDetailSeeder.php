<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];

        for ($i = 1; $i <= 10; $i++) {
            for ($j = 1; $j <= 3; $j++) {
                $data[] = [
                    'penjualan_id' => $i,
                    'barang_id' => rand(1,15),
                    'jumlah' => rand(1,5),
                    'harga' => rand(6000,10000),
                ];
            }
        }

        DB::table('t_penjualan_detail')->insert($data);
    }
}
