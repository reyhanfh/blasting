<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefkotamodelsTable extends Migration
{    
    public function up()
    {
        Schema::create('tbl_kota', function (Blueprint $table) {
            $table->id();
            $table->String('kotaName');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbl_kota');
    }
}
