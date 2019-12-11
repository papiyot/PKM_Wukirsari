<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRencanaDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rencana_detail', function (Blueprint $table) {
            $table->integer('rencana_detail_id')->primary();
            $table->integer('rencana_detail_rencana_id');
            $table->foreign('rencana_detail_rencana_id')->references('rencana_id')->on('rencana')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('rencana_detail_objek_id');
            $table->foreign('rencana_detail_objek_id')->references('objek_id')->on('objek')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('rencana_detail_peserta');
            $table->float('rencana_detail_biaya');
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
        Schema::dropIfExists('rencana_detail');
    }
}
