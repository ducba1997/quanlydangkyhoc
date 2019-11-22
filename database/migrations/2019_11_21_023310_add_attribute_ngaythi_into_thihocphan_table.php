<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAttributeNgaythiIntoThihocphanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('thihocphan', function (Blueprint $table) {
            $table->date('ngaythi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('thihocphan', function (Blueprint $table) {
            $table->dropColumn('ngaythi');
        });
    }
}
