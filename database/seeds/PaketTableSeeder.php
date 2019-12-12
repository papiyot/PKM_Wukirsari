<?php

use Illuminate\Database\Seeder;

class PaketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($x=1; $x<=10; $x++) {
            DB::table('paket')->insert([
                'paket_nama' => 'Paket ' . $x,
                'paket_letak_deskripsi' => 'ini adalah pekt wisata ' . $x,
                'paket_biaya' => 2000*$x,
            ]);
        }
    }
}
