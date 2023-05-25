<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }
    public function pembayaran()
    {
        return $this->belongsTo(Pembayaran::class);
    }
}
