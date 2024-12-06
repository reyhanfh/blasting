<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelgalerymodelsTable extends Migration
{
    
    public function up()
    {
        Schema::create('tbl_hotelgallery', function (Blueprint $table) {
            $table->id();
            $table->UnsignedBigInteger('idhotel');
            $table->String('file');
            $table->String('panjang')->nullable()->default(null);
            $table->String('lebar')->nullable()->default(null);
            $table->timestamps();

            $table->index('idhotel');
            $table->foreign('idhotel')
            ->references('id')
            ->on('tbl_hotel')
            ->onDeletere('restrict');
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('tbl_hotelgallery');
    }
}
