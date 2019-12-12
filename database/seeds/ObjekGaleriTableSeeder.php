<?php

use Illuminate\Database\Seeder;

class ObjekGaleriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($x=1; $x<=10; $x++) {
            DB::table('objek_galeri')->insert([
                'objek_galeri_objek_id' => $x,
                'objek_galeri_letak' => 'foto' . $x,
            ]);
        }
    }
}
