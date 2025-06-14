<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use Illuminate\Http\Request;

class RiwayatKunjunganController extends Controller
{
    public function index()
    {
        $data['model'] = Tamu::all();
        return view('riwayat-kunjungan.index', $data);
    }
}
