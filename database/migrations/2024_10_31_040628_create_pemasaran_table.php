<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemasaranTable extends Migration
{
    public function up()
    {
        Schema::create('pemasaran', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kampanye');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai')->nullable();
            $table->text('deskripsi')->nullable();
            $table->decimal('biaya', 15, 2)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pemasaran');
    }
};
