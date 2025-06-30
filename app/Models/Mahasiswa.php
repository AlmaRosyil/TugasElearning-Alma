<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    // Nama tabel (optional jika sesuai konvensi)
    protected $table = 'mahasiswas';

    // Kolom yang bisa diisi (mass assignment)
    protected $fillable = [
        'nama',
        'nim',
        'jurusan',
          'foto',
    ];
}
