<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDieuchuyensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dieuchuyens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mahs')->unsigned();
            $table->dateTime('ngay');
            $table->integer('malopcu')->unsigned();
            $table->integer('malopmoi')->unsigned();
            $table->string('lydo');
            $table->string('tinhtrang');
            $table->foreign('mahs')->references('id')->on('hocsinhs')->onDelete('cascade');
            $table->foreign('malopcu')->references('id')->on('lops')->onDelete('cascade');
            $table->foreign('malopmoi')->references('id')->on('lops')->onDelete('cascade');
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
        Schema::dropIfExists('dieuchuyens');
    }
}
