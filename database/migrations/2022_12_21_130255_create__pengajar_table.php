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
        Schema::create('_pengajar', function (Blueprint $table) {
            $table->string('nidn',15)->primary();
            $table->string('nama_dosen',150);
            $table->string('alamat',250);
            $table->string('kota',100);
            $table->string('matkul_yang_diampu',150);
            $table->string('jurusan',150);
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrent()->useCurrentOnUpdate();
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
        Schema::dropIfExists('_pengajar');
    }
};
