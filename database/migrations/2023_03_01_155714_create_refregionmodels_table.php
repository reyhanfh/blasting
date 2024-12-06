<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefregionmodelsTable extends Migration
{
    public function up()
    {
        Schema::create('tbl_region', function (Blueprint $table) {
            $table->id();
            $table->String('regionName');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbl_region');
    }
}
