<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiketPembayaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiket_pembayaran', function (Blueprint $table) {
            $table->integer('tiket_pembayaran_id')->autoIncrement();
            $table->integer('tiket_pembayaran_tiket_id');
            $table->foreign('tiket_pembayaran_tiket_id')->references('tiket_id')->on('tiket')->onUpdate('cascade')->onDelete('cascade');
            $table->date('tiket_pembayaran_tanggal');
            $table->string('tiket_pembayaran_metode');
            $table->string('tiket_pembayaran_status');
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
        Schema::dropIfExists('tiket_pembayaran');
    }
}
