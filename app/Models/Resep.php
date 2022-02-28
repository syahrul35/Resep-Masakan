<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    protected $fillable =['judul', 'deskripsi', 'alat_bahan', 'langkah', 'gambar'];
}
