<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('progres', function (Blueprint $table) {
            $table->bigIncrements('id_progres'); // Tipe unsignedBigInteger
            $table->string('index1')->nullable();
            $table->string('index2')->nullable();
            $table->string('index3')->nullable();
            $table->string('index4')->nullable();
            $table->string('index5')->nullable();
            $table->unsignedBigInteger('id_rumah'); // Tipe harus sama dengan primary key
            $table->foreign('id_rumah')
                ->references('id_rumah')
                ->on('rumahs')
                ->cascadeOnDelete(); // Foreign key sesuai dengan nama kolom di tabel rumahs
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('progres');
    }
};
