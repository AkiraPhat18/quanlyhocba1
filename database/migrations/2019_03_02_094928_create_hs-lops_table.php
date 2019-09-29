<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHsLopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hs-lops', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mahs')->unsigned();
            $table->integer('malop')->unsigned();
            $table->string('tinhtrang');
            $table->string('hanhkiem');
            $table->string('nxki1');
            $table->string('nxki2');
            $table->string('nxnam');
            $table->foreign('mahs')->references('id')->on('hocsinhs')->onDelete('cascade');
            $table->foreign('malop')->references('id')->on('lops')->onDelete('cascade');
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
        Schema::dropIfExists('hs-lops');
    }
}
