<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaketDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket_detail', function (Blueprint $table) {
            $table->integer('paket_detail_id')->autoIncrement();
            $table->integer('paket_detail_paket_id');
            $table->foreign('paket_detail_paket_id')->references('paket_id')->on('paket')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('paket_detail_objek_id');
            $table->foreign('paket_detail_objek_id')->references('objek_id')->on('objek')->onUpdate('cascade')->onDelete('cascade');
            $table->float('paket_detail_biaya');
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
        Schema::dropIfExists('paket_detail');
    }
}
