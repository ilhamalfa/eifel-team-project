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
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('customers');
            $table->integer('totalBuku');
            $table->integer('totalHarga');
            $table->timestamp('tanggalPemesanan');
            $table->foreignId('admin_id')->constrained('users')->nullable();
            $table->integer('ongkir');
            $table->string('metodePembayaran');
            $table->string('statusPemesanan');
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
        Schema::dropIfExists('pemesanans');
    }
};