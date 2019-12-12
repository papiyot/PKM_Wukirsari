<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLayananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layanan', function (Blueprint $table) {
            $table->integer('layanan_id')->autoIncrement();
            $table->integer('layanan_objek_id');
            $table->foreign('layanan_objek_id')->references('objek_id')->on('objek')->onUpdate('cascade')->onDelete('cascade');
            $table->string('layanan_nama');
            $table->text('layanan_deskripsi')->nullable();
            $table->float('layanan_biaya')->nullable();
            $table->string('layanan_souvenir')->nullable();
            $table->string('layanan_pemandu')->nullable();
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
        Schema::dropIfExists('layanan');
    }
}
