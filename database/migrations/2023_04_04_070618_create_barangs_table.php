<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('barangs', function (Blueprint $table) {
            $table->integer('Kode_barang')->primary();
            $table->string('Nama_barang',50)->nullable();
            $table->string('Kategori_barang',20)->nullable();
            $table->string('Harga',50)->nullable();
            $table->string('Qty',12)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangs');
    }
};
