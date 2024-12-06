<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRateplanhotelmodelsTable extends Migration
{
    
    public function up()
    {
        Schema::create('tbl_rateplan', function (Blueprint $table) {
            $table->id();
            $table->String('name',50);
            $table->Text('descrition');
            $table->integer('MinLOS');
            $table->integer('MaxLOS');
            $table->UnsignedBigInteger('idroomtype');
            $table->Integer('baserate');
            $table->Integer('variable');
            $table->Num('variabletype',['nominal','persen']);
            $table->UnsignedBigInteger('idpolicy');
            $table->timestamps();

            
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('tbl_rateplan');
    }
}
