<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyHarga;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Barang as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    
    protected $table = "barangs";
    public $timestamps = false;
    protected $primaryKey = 'Kode_barang';
    public $incrementing= false;

    protected $fillable = [
        'Kode_barang',
        'Nama_barang',
        'Kategori_barang',
        'Harga',
        'Qty',
    ];
}
