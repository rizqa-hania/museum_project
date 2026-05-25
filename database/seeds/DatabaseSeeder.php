<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jadwal')->insert([
            [
                'tanggal' => '2026-04-08',
                'jam' => '09:00:00',
                'kuota' => 100,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tanggal' => '2026-04-08',
                'jam' => '14:00:00',
                'kuota' => 100,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tanggal' => '2026-05-08',
                'jam' => '10:00:00',
                'kuota' => 80,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

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

        DB::table('petugas')->insert([
            [
                'nama' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
