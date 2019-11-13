<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThihocphanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thihocphan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('monhoc_id')->unsigned();
            $table->bigInteger('hocky_id')->unsigned();
            $table->bigInteger('nganh_id')->unsigned();
            $table->time('thoigianbatdau');
            $table->time('thoigianketthuc');
            $table->string('noithi');
            $table->string('ghichu')->nullable();
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
        Schema::dropIfExists('thihocphan');
    }
}
