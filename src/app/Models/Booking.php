<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';

    protected $fillable = [
        'pelanggan_id',
        'room_id',
        'tanggal_booking',
        'jam_mulai',
        'jam_selesai',
        'durasi',
        'total_harga',
        'status',
        'catatan',
    ];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}