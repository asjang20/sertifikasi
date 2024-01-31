<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_peserta';
    protected $fillable = [
        'id_peserta',
        'kd_skema',
        'nm_peserta',
        'jekel',
        'alamat',
        'no_hp',
    ];
}
