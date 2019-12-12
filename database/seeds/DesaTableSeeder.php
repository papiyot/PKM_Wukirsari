<?php

use Illuminate\Database\Seeder;

class DesaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        DB::table('desa')->truncate();
        for ($x=1; $x<=10; $x++) {
            DB::table('desa')->insert([
                'desa_nama' => 'Desa ' . $x,
                'desa_alamat' => 'Wukirsari ' . $x,
                'desa_koordinat' => $x . ',' . $x,
            ]);
        }
    }
}
