<table width="100%">
    <thead>
       <tr>
            <th>No</th>
            <th>Nama</th>
            <th>No HP</th>
            <th>No Identitas</th>
            <th>No Kendaraan</th>
            <th>Jam Masuk</th>
            <th>Jam Keluar</th>
            <th>Keperluan</th>
       </tr>
    </thead>
    <tbody>
        @foreach($model as $row)
       <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $row->nama }}</td>
            <td>{{ $row->no_hp }}</td>
            <td>{{ $row->no_identitas }}</td>
            <td>{{ $row->no_kendaraan }}</td>
            <td>{{ $row->jam_masuk }}</td>
            <td>{{ $row->jam_keluar }}</td>
            <td>{{ $row->keperluan }}</td>
       </tr>
       @endforeach
    </tbody>
 </table>