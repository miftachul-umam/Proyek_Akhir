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
        Schema::create('embohs', function (Blueprint $table) {
            $table->string('nim',15)->primary();
            $table->string('nama',150);
            $table->integer('umur');
            $table->text('alamat',255);
            $table->string('kota',100);
            $table->string('kelas',50);
            $table->string('jurusan',50);
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('embohs');
    }
};
