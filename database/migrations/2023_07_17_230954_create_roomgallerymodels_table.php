<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomgallerymodelsTable extends Migration
{    
    public function up()
    {
        Schema::create('tbl_roomgallery', function (Blueprint $table) {
            $table->id();
            $table->UnsignedBigInteger('idroom');
            $table->String('file');
            $table->String('panjang')->nullable()->default(null);
            $table->String('lebar')->nullable()->default(null);
            $table->timestamps();

            $table->index('idroom');
            $table->foreign('idroom')
            ->references('idroom')
            ->on('tbl_hootelroom')
            ->onDeletere('restrict');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbl_roomgallery');
    }
}
