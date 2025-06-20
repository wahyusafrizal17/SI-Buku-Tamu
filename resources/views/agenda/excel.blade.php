<table width="100%">
    <thead>
       <tr>
            <th>No</th>
            <th>Nama PT</th>
            <th>Jenis Pekerjaan</th>
            <th>Jumlah Pekerja</th>
            <th>Tanggal</th>
            <th>Jam Masuk</th>
            <th>Jam Keluar</th>
       </tr>
    </thead>
    <tbody>
        @foreach($model as $row)
       <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $row->nama_pt }}</td>
            <td>{{ $row->jenis_pekerjaan }}</td>
            <td>{{ $row->jumlah_pekerja }}</td>
            <td>{{ $row->tanggal }}</td>
            <td>{{ $row->jam_masuk }}</td>
            <td>{{ $row->jam_keluar }}</td>
       </tr>
       @endforeach
    </tbody>
 </table>