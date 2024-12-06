<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRateplanmodelsTable extends Migration
{
    public function up()
    {
        Schema::create('tbl_rateplan', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->Text('description');
            $table->Integer('cancelationpolicy');            
            $table->Double('ratevariable');
            $table->Enum('variable',['1','2']);
            $table->UnsignedBigInteger('idroomtype');
            $table->Boolean('fixrate');
            $table->Double('fixrateamount');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('tbl_rateplan');
    }
}
