<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccomodationtypemodelsTable extends Migration
{
    public function up()
    {
        Schema::create('tbl_acomodationtype', function (Blueprint $table) {
            $table->id();
            $table->String('accomodationname');
            $table->Boolean('isactive')->default(True);
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('tbl_acomodationtype');
    }
}
