<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomtypemodelsTable extends Migration
{    
    public function up()
    {
        Schema::create('tbl_roomtype', function (Blueprint $table) {
            $table->id();
            $table->String('code','5');
            $table->String('name','35');
            $table->double('baserate');
            $table->Boolean('aktif')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbl_roomtype');
    }
}
