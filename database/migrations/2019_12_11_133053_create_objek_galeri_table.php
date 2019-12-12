<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjekGaleriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objek_galeri', function (Blueprint $table) {
            $table->integer('objek_galeri_id')->autoIncrement();
            $table->integer('objek_galeri_objek_id');
            $table->foreign('objek_galeri_objek_id')->references('objek_id')->on('objek')->onUpdate('cascade')->onDelete('cascade');
            $table->string('objek_galeri_letak');
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
        Schema::dropIfExists('objek_galeri');
    }
}
