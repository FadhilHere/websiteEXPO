<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Katalog extends Model
{
    use HasFactory;

    protected $table = 'katalog';

    protected $fillable = [
        'kategori',
        'judul',
        'author',
        'deskripsi',
        'foto',
        'video',
        'tahun',
        'status',
    ];

    protected $dates = [
        'tahun',
    ];
}
