<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekpedisi extends Model
{
    use HasFactory;

    protected $table = 'ekpedisi';

    protected $fillable = ['nama_pengirim', 'nama_instansi', 'nama_penerima', 'tanggal', 'tujuan', 'jam', 'foto_penyerahan_surat'];
}
