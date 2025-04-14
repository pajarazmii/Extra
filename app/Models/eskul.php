<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eskul extends Model
{
    use HasFactory;

    protected $table = "eskul";

    protected $fillable = [
        'nama_eskul',
        'id_pembina',
        'id_ketua',
        'jadwal',
        'tentang',
    ];
}
