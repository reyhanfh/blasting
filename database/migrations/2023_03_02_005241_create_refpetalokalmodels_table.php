<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefpetalokalmodelsTable extends Migration
{
    public function up()
    {
        Schema::create('tbl_petalokal', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('jenislokasiid');
            $table->String('lokasiName');
            $table->String('lokasiphoto')->nullable()->default(NULL);
            $table->Boolean('aktif')->default(true);

            $table->index('jenislokasiid');
            $table->foreign('jenislokasiid')
            ->references('id')
            ->on('tbl_jenispetalokal')
            ->onDelete('restrict');
            });
    }

    public function down()
    {
        Schema::dropIfExists('tbl_petalokal');
    }
}
