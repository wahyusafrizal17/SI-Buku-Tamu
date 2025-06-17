<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $table = 'agenda';

    protected $fillable = ['nama_pt', 'jenis_pekerjaan', 'jumlah_pekerja', 'tanggal', 'foto_ktp', 'jam_masuk', 'jam_keluar'];
}
