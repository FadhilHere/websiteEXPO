<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagementKontenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('management_konten', function (Blueprint $table) {
            $table->id();
            $table->longText('kategori')->nullable();
            $table->longText('judul')->nullable();
            $table->longText('jenis')->nullable();
            $table->longText('isi')->nullable();
            $table->longText('menu')->nullable();
            $table->longText('submenu')->nullable();
            $table->longText('file')->nullable();
            $table->longText('status')->nullable();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('management_konten');
    }
}


