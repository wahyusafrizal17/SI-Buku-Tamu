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
    <h1>Data Agenda</h1>
    {{-- <p class="date-info">
        Tanggal Export: {{ \Carbon\Carbon::now()->translatedFormat('d F Y H:i:s') }}
    </p> --}}

    <table>
        <thead>
           <tr>
                <th class="text-center" style="width: 5%;">No</th>
                <th>Nama PT<</th>
                <th style="width: 10%;">Jenis Pekerjaan</th>
                <th style="width: 15%;">Jumlah Pekerja</th>
                <th style="width: 15%;">Tanggal</th>
                <th style="width: 10%;">Jam Masuk</th>
                <th style="width: 10%;">Jam Keluar</th>
           </tr>
        </thead>
        <tbody>
            @forelse($model as $row)
            <tr>
                <td class="text-center">{{ $loop->iteration }}</td>
                <td>{{ $row->nama_pt }}</td>
                <td>{{ $row->jenis_pekerjaan }}</td>
                <td>{{ $row->jumlah_pekerja }}</td>
                <td>{{ $row->tanggal }}</td>
                <td>{{ $row->jam_masuk }}</td>
                <td>{{ $row->jam_keluar }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="text-center">Tidak ada data yang ditemukan.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>