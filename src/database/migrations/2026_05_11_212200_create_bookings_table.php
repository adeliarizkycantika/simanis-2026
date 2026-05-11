<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->id();

            $table->foreignId('pelanggan_id')
                ->constrained('pelanggan')
                ->cascadeOnDelete();

            $table->foreignId('room_id')
                ->constrained('room')
                ->cascadeOnDelete();

            $table->date('tanggal_booking');

            $table->time('jam_mulai');

            $table->time('jam_selesai');

            $table->integer('durasi');

            $table->decimal('total_harga', 12, 2)
                ->default(0);

            $table->enum('status', [
                'pending',
                'aktif',
                'selesai',
                'cancel',
            ])->default('pending');

            $table->text('catatan')
                ->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};