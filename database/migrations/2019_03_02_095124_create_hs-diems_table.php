<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHsDiemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hs-diems', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mahs')->unsigned();
            $table->integer('magv')->unsigned();
            $table->integer('mamon')->unsigned();
            $table->integer('mabaikt')->unsigned();
            $table->float('diem');
            $table->foreign('mamon')->references('id')->on('mons')->onDelete('cascade');
            $table->foreign('mabaikt')->references('id')->on('baikts')->onDelete('cascade');
            $table->foreign('magv')->references('id')->on('giaoviens')->onDelete('cascade');
            $table->foreign('mahs')->references('id')->on('hocsinhs')->onDelete('cascade');
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
        Schema::dropIfExists('hs-diems');
    }
}
