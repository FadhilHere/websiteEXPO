<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManagementKonten extends Model
{
    use HasFactory;

    protected $table = 'management_konten';

    protected $fillable = [
        'kategori',
        'judul',
        'jenis',
        'isi',
        'menu',
        'submenu',
        'file',
        'status'
    ];
}
