<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRencanaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rencana', function (Blueprint $table) {
            $table->integer('rencana_id')->autoIncrement();
            $table->string('rencana_nama');
            $table->date('rencana_pelaksanaan');
            $table->char('rencana_jenis', 1);
            $table->integer('rencana_peserta');
            $table->biginteger('rencana_by');
            $table->foreign('rencana_by')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('rencana');
    }
}
