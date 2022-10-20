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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('provinsi');
            $table->string('kabkota');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('detail_alamat');
            $table->string('nomortelp');
            $table->string('jenis_kelamin');
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
        Schema::dropIfExists('customers');
    }
};
