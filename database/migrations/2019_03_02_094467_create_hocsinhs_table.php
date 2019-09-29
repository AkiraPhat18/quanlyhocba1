<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHocsinhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hocsinhs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tenhs');
            $table->dateTime('ngaysinh');
            $table->string('gioitinh');
            $table->string('dantoc');
            $table->string('quequan');
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
        Schema::dropIfExists('hocsinhs');
    }
}
