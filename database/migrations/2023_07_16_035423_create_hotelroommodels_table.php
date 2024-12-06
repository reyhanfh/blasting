<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelroommodelsTable extends Migration
{    
    public function up()
    {
        Schema::create('tbl_hotelroom', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idhotel');
            $table->unsignedBigInteger('idroomtype');
            $table->String('roomsize','12');
            $table->Integer('allotment');
            $table->Text('deskripsi');
            $table->String('photo')->nullable()->default(null);
            $table->Boolean('aktif')->default(true);            
            $table->timestamps();
            
            $table->index('idhotel');
            $table->foreign('idhotel')
            ->references('id')
            ->on('tbl_hotel')
            ->onDelete('restrict');

            $table->index('idroomtype');
            $table->foreign('idroomtype')
            ->references('id')
            ->on('tbl_roomtype')
            ->onDelete('restrict');
            
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('hotelroommodels');
    }
}
