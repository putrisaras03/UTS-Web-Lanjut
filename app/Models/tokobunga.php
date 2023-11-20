<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tokobunga extends Model
{
    protected $guarded = ['id'];
    protected $fillable = [
        'namabunga',
        'harga',
        'deskripsi',
        'gambar',
    ];    
}
