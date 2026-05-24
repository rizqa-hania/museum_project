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
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
