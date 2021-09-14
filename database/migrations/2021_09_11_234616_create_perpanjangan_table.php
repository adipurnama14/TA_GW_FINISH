<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerpanjanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perpanjangan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tahun_id');
            $table->foreignId('semester_id');
            $table->foreignId('mahasiswa_id');
            $table->string('ipk');
            $table->string('kejuaraan');
            $table->string('akademik');
            $table->string('non_akademik');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('tahun_id')->references('id')->on('tahun')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('semester_id')->references('id')->on('semester')
            ->onUpdate('cascade')
            ->onDelete('cascade');

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
        Schema::dropIfExists('perpanjangan');
    }
}
