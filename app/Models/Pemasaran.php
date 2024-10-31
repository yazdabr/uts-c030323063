<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemasaran extends Model
{
    use HasFactory;

    protected $table = 'pemasaran';

    protected $fillable = [
        'nama_kampanye',
        'tanggal_mulai',
        'tanggal_selesai',
        'deskripsi',
        'biaya',
    ];
    protected $casts = [
        'tanggal_mulai' => 'date',
        'tanggal_selesai' => 'date',
        'biaya' => 'decimal:2',
    ];
}
