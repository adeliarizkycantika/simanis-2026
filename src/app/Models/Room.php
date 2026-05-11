<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'room';

    protected $fillable = [
        'nama_room',
        'kapasitas',
        'harga_per_jam',
        'status',
    ];

    public function booking()
    {
        return $this->hasMany(Booking::class);
    }
}