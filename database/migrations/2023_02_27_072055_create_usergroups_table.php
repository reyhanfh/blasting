<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsergroupsTable extends Migration
{
    public function up()
    {
        Schema::create('tbl_usergroup', function (Blueprint $table) {
            $table->id();
            $table->String('namaGroup');
            $table->text('deskripsi')->nullable()->default(NULL);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tbl_usergroup');
    }
}
