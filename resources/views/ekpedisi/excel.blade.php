<table width="100%">
    <thead>
       <tr>
            <th>No</th>
            <th>Nama Pengirim</th>
            <th>Instansi</th>
            <th>Nama Penerima</th>
            <th>Tanggal - Jam</th>
            <th>Tujuan</th>
       </tr>
    </thead>
    <tbody>
        @foreach($model as $row)
       <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $row->nama_pengirim }}</td>
            <td>{{ $row->nama_instansi }}</td>
            <td>{{ $row->nama_penerima }}</td>
            <td>{{ substr($row->tanggal, 0, 10) }} - {{ $row->jam }}</td>
            <td>{{ $row->tujuan }}</td>
       </tr>
       @endforeach
    </tbody>
 </table>