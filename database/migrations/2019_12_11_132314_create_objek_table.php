<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objek', function (Blueprint $table) {
            $table->integer('objek_id')->primary();
            $table->integer('objek_desa_id');
            $table->foreign('objek_desa_id')->references('desa_id')->on('desa')->onUpdate('cascade')->onDelete('cascade');
            $table->string('objek_nama');
            $table->text('objek_alamat');
            $table->text('objek_letak_diskripsi');
            $table->float('objek_biaya');
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
        Schema::dropIfExists('objek');
    }
}
