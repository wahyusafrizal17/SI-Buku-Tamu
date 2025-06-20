<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use Illuminate\Http\Request;

class RiwayatKunjunganController extends Controller
{
    public function index(Request $request)
    {
        $query = Tamu::query();

        if ($request->has('filter') && !empty($request->input('filter'))) {
            $searchTerm = \Carbon\Carbon::parse($request->input('filter'))->format('Y-m-d');
            $query->whereDate('created_at', $searchTerm);
        }

        $data['model'] = $query->get();

        return view('riwayat-kunjungan.index', $data);
    }
}
