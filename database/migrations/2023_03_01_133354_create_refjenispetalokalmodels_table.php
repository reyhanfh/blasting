<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefjenispetalokalmodelsTable extends Migration
{
    public function up()
    {
        Schema::create('tbl_jenispetalokal', function (Blueprint $table) {
            $table->id();
            $table->String('jenislokasiName');
            $table->String('jenislokasiPhoto')->nullable()->default(NULL);
            $table->Boolean('aktif')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbl_jenispetalokal');
    }
}
