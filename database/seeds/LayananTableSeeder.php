<?php

use Illuminate\Database\Seeder;

class LayananTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($x=1; $x<=10; $x++) {
            DB::table('layanan')->insert([
                'layanan_objek_id' => $x,
                'layanan_nama' => 'layanan ' . $x,
                'layanan_deskripsi' => 'ini adalah layanan wisata ' . $x,
                'layanan_biaya' => 2000*$x,
                'layanan_souvenir' => 'Souvenir ' . $x,
                'layanan_pemandu' => 'Pemandu ' . $x,
            ]);
        }
    }
}
