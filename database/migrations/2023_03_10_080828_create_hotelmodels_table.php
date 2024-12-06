<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelmodelsTable extends Migration
{
    public function up()
    {
        Schema::create('tbl_hotel', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('accomodationtypeid');
            $table->unsignedBigInteger('brandid');
            $table->unsignedBigInteger('regionid');
            $table->unsignedBigInteger('kotaid');
            $table->String('hotelcode',4);
            $table->String('hotelname',150);
            $table->String('slug',160);
            $table->enum('star',['1','2','3','4','5']);
            $table->String('address',200)->nullable()->default(null);
            $table->String('zipcode',5)->nullable()->default(null);
            $table->String('phone',15)->nullable()->default(null);
            $table->String('phone2',15)->nullable()->default(null);
            $table->String('nowa',15)->nullable()->default(null);
            $table->String('nofax',15)->nullable()->default(null);
            $table->String('logo')->nullable()->default(null);
            $table->Boolean('aktif')->default(true);
            $table->timestamps();

            $table->index('accomodationtypeid');
            $table->foreign('accomodationtypeid')
            ->references('id')
            ->on('tbl_acomodationtype')
            ->onDelete('restrict');

            $table->index('brandid');
            $table->foreign('brandid')
            ->references('id')
            ->on('tbl_brand')
            ->onDelete('restrict');

            $table->index('regionid');
            $table->foreign('regionid')
            ->references('id')
            ->on('tbl_region')
            ->onDelete('restrict');

            $table->index('kotaid');
            $table->foreign('kotaid')
            ->references('id')
            ->on('tbl_kota')
            ->onDelete('restrict');
        });        
    }

    public function down()
    {
        Schema::dropIfExists('tbl_hotel');
    }
}
