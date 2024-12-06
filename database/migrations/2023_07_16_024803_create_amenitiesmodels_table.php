<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmenitiesmodelsTable extends Migration
{
    public function up()
    {
        Schema::create('tbl_aminities', function (Blueprint $table) {
            $table->id();
            $table->String('name','50');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('tbl_aminities');
    }
}
