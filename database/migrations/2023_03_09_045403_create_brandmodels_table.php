<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandmodelsTable extends Migration
{
    public function up()
    {
        Schema::create('tbl_brand', function (Blueprint $table) {
            $table->id();
            $table->String('brandname');
            $table->String('logo')->nullable()->default(null);
            $table->Boolean('aktif')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbl_brand');
    }
}
