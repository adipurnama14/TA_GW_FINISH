<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerhitunganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perhitungan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dataset_id');
            $table->foreignId('kakulasi_id');
            $table->float('jarak')->nullable();
            $table->softDeletes();
            $table->timestamps();


            $table->foreign('dataset_id')->references('id')->on('dataset')
            ->onUpdate('cascade')
            ->onDelete('cascade');


            $table->foreign('kakulasi_id')->references('id')->on('kakulasi')
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
        Schema::dropIfExists('perhitungan');
    }
}
