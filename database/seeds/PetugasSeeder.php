<?php

use Illuminate\Database\Seeder;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('petugas')->insert([
            [
                'nama' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345'),
                'shift' => 'Pagi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Petugas 1',
                'email' => 'petugas1@gmail.com',
                'password' => Hash::make('12345'),
                'shift' => 'Siang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Petugas 2',
                'email' => 'petugas2@gmail.com',
                'password' => Hash::make('12345'),
                'shift' => 'Malam',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
