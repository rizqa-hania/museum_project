<?php

use Illuminate\Database\Seeder;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jadwal')->insert([
            [
                'tanggal' => '2026-04-08',
                'waktu' => '09:00:00',
                'kuota' => 100,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tanggal' => '2026-04-08',
                'waktu' => '14:00:00',
                'kuota' => 100,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'tanggal' => '2026-05-08',
                'waktu' => '10:00:00',
                'kuota' => 80,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
