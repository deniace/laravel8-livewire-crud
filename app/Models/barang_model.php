<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang_model extends Model
{
    use HasFactory;

    protected $table = 'barang';
    protected $fillable = ['id', 'nama_barang', 'merk_barang', 'harga_barang'];
}
