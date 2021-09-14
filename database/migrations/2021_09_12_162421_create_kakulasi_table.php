<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKakulasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kakulasi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mahasiswa_id');
            $table->float('ipk');
            $table->float('kejuaraan');
            $table->float('akademik');
            $table->float('non_akademik');
            $table->string('hasil')->nullable();
            $table->softDeletes();
            $table->timestamps();


            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswa')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kakulasi');
    }
}
