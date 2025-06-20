<!DOCTYPE html>
<html>
<head>
    <title>Data Tamu</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        /* Definisi CSS untuk PDF */
        body {
            font-family: Arial, sans-serif;
            font-size: 10px;
            margin: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            font-size: 18px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 6px; /* Padding lebih kecil untuk data padat */
            text-align: left;
            word-wrap: break-word; /* Memastikan teks panjang pecah baris */
        }
        th {
            background-color: #f2f2f2;
            color: #555;
            font-weight: bold;
        }
        tbody tr:nth-child(even) {
            background-color: #f9f9f9; /* Warna selang-seling */
        }
        .text-center {
            text-align: center;
        }
        .text-right {
            text-align: right;
        }
        .date-info {
            text-align: center;
            font-size: 10px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <h1>Data Kunjungan Tamu</h1>
    {{-- <p class="date-info">
        Tanggal Export: {{ \Carbon\Carbon::now()->translatedFormat('d F Y H:i:s') }}
    </p> --}}

    <table>
        <thead>
           <tr>
                <th class="text-center" style="width: 5%;">No</th>
                <th>Nama</th>
                <th style="width: 10%;">No HP</th>
                <th style="width: 15%;">No Identitas</th>
                <th style="width: 15%;">No Kendaraan</th>
                <th style="width: 10%;">Jam Masuk</th>
                <th style="width: 10%;">Jam Keluar</th>
                <th>Keperluan</th>
           </tr>
        </thead>
        <tbody>
            @forelse($model as $row) {{-- Menggunakan $model sesuai variabel dari controller Anda --}}
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->no_hp }}</td>
                <td>{{ $row->no_identitas }}</td>
                <td>{{ $row->no_kendaraan }}</td>
                <td>{{ $row->jam_masuk }}</td>
                <td>{{ $row->jam_keluar }}</td>
                <td>{{ $row->keperluan }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="8" class="text-center">Tidak ada data tamu yang ditemukan.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>