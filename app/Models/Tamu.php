<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    use HasFactory;

    protected $table = 'tamu';

    protected $fillable = ['nama', 'no_hp', 'alamat', 'instansi', 'no_identitas', 'no_kendaraan', 'keperluan', 'jam_masuk', 'jam_keluar', 'foto_tamu', 'foto_ktp', 'foto_plat_nomor'];
}
