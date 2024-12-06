<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomamenitiesmodelsTable extends Migration
{
    
    public function up()
    {
        Schema::create('tbl_roomamenities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idroom');
            $table->unsignedBigInteger('idamenities');
            $table->timestamps();

            $table->index('idroom');
            $table->foreign('idroom')
            ->references('id')
            ->on('tbl_hotelroom')
            ->onDelete('restrict');

            $table->index('idamenities');
            $table->foreign('idamenities')
            ->references('id')
            ->on('tbl_aminities')
            ->onDelete('restrict');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tbl_roomamenities');
    }
}
