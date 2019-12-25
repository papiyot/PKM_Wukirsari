<?php

use Illuminate\Database\Seeder;

class ObjekTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('objek')->truncate();
        for ($x=1; $x<=10; $x++) {
            DB::table('objek')->insert([
                'objek_desa_id' => $x,
                'objek_nama' => 'Objek ' . $x,
                'objek_alamat' => 'Wukirsari ' . $x,
                'objek_letak_diskripsi' => 'ini adalah desa wisata ' . $x,
                'objek_biaya' => 2000*$x,
                'objek_images' => 'foto' . $x.'.jpg',
            ]);
        }
    }
}
