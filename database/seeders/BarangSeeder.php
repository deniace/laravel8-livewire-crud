<?php

namespace Database\Seeders;

use App\Models\barang_model;
use Database\Factories\BarangFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 1; $i < 15; $i++) {
            # code...
            DB::table('barang')->insert([
                'id' => $i,
                'nama_barang' => "kulkas $i",
                'merk_barang' => "Uchida $i",
                'harga_barang' => 2000000 . $i,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        // DB::table('barang')->insert([
        //     'id' => 2,
        //     'nama_barang' => "Lemari",
        //     'merk_barang' => "Jati",
        //     'harga_barang' => 500000,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

    }
}
