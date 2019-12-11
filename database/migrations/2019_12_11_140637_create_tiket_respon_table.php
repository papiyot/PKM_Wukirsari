<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiketResponTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiket_respon', function (Blueprint $table) {
            $table->integer('tiket_respon_id')->primary();
            $table->integer('tiket_respon_tiket_id');
            $table->foreign('tiket_respon_tiket_id')->references('tiket_id')->on('tiket')->onUpdate('cascade')->onDelete('cascade');
            $table->float('tiket_respon_persentase');
            $table->string('tiket_respon_alias');
            $table->string('tiket_respon_letak_respon');
            $table->integer('tiket_respon_objek_galeri_id');
            $table->foreign('tiket_respon_objek_galeri_id')->references('objek_galeri_id')->on('objek_galeri')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tiket_respon');
    }
}
