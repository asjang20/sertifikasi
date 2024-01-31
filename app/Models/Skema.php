<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skema extends Model
{
    use HasFactory;
    protected $primaryKey = 'kd_skema';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable=[
        'kd_skema',
        'nm_skema',
        'jenis',
        'jml_unit',
    ];
}


