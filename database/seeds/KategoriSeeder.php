<?php

use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('kategori_tiket')->insert([
            [
                'nama_kategori' => 'Dewasa',
                'harga' => 50000,
                'deskripsi' => 'Tiket untuk pengunjung dewasa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kategori' => 'Anak-anak',
                'harga' => 25000,
                'deskripsi' => 'Tiket untuk pengunjung anak-anak',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kategori' => 'Pelajar',
                'harga' => 35000,
                'deskripsi' => 'Tiket untuk pelajar dengan menunjukkan kartu pelajar yang valid',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
