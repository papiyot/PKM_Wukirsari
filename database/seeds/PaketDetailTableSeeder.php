<?php

use Illuminate\Database\Seeder;

class PaketDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($x=1; $x<=10; $x++) {
            for($y=1; $y<=3; $y++){
                DB::table('paket_detail')->insert([
                    'paket_detail_paket_id' => $x,
                    'paket_detail_objek_id' => $y,
                    'paket_detail_biaya' => 2000*$x*$y,
                ]);
            }

        }
    }
}
