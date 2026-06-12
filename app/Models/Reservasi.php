<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'stylist_id',
        'pelanggan_id',
        'layanan_id',
        'style_id',
        'tanggal_booking',
        'total_harga',
        'status_pembayaran',
    ];

    public function stylist()
    {
        return $this->belongsTo(Stylist::class, 'stylist_id');
    }

    public function pelanggan()
    {
        return $this->belongsTo(pelanggan::class, 'pelanggan_id');
    }
    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'layanan_id');
    }

    public function style()
    {
        return $this->belongsTo(Style::class, 'style_id');
    }

    public function getTotal_HargaFormattedAttribute()
    {
    return 'Rp ' . number_format($this->total_harga, 0, ',', '.');
    }
}
