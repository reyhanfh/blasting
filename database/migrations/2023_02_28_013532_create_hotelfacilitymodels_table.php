<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelfacilitymodelsTable extends Migration
{
    public function up()
    {
        Schema::create('tbl_hotelfaicility', function (Blueprint $table) {
            $table->id();
            $table->String('facilityName');
            $table->String('icon')->nullable()->default(null);
            $table->Boolean('aktif')->default(true);
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('tbl_hotelfaicility');
    }
}
