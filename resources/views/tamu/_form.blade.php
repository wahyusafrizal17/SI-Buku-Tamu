<div class="card-body">

    <div class="form-group mb-1">
        <label>Nama</label>
        {{ Form::text('nama',null,['class'=>'form-control'])}}
        @if ($errors->has('nama')) <span class="help-block" style="color:red">{{ $errors->first('nama') }}</span> @endif
    </div>

    <div class="form-group mb-1">
        <label>Instansi</label>
        {{ Form::text('instansi',null,['class'=>'form-control'])}}
        @if ($errors->has('instansi')) <span class="help-block" style="color:red">{{ $errors->first('instansi') }}</span> @endif
    </div>

    <div class="form-group mb-1">
        <label>Alamat</label>
        {{ Form::text('alamat',null,['class'=>'form-control'])}}
        @if ($errors->has('alamat')) <span class="help-block" style="color:red">{{ $errors->first('alamat') }}</span> @endif
    </div>

    <div class="form-group mb-1">
        <label>Keperluan / Bidang Tujuan</label>
        {{ Form::select('keperluan', ['Keuangan' => 'Keuangan', 'Pemasaran' => 'Pemasaran', 'Niaga' => 'Niaga', 'Konstruksi' => 'Konstruksi', 'Jaringan' => 'Jaringan', 'TE' => 'TE', 'Pengadaan' => 'Pengadaan', 'Perencanaan' => 'Perencanaan', 'K3' => 'K3'], null, ['class' => 'form-control']) }}
        @if ($errors->has('alamat')) <span class="help-block" style="color:red">{{ $errors->first('alamat') }}</span> @endif
    </div>

    <div class="form-group mb-1">
        <label>No HP</label>
        {{ Form::text('no_hp',null,['class'=>'form-control'])}}
        @if ($errors->has('no_hp')) <span class="help-block" style="color:red">{{ $errors->first('no_hp') }}</span> @endif
    </div>

    <div class="form-group mb-1">
        <label>No Identitas</label>
        {{ Form::text('no_identitas',null,['class'=>'form-control'])}}
        @if ($errors->has('no_identitas')) <span class="help-block" style="color:red">{{ $errors->first('no_identitas') }}</span> @endif
    </div>

    <div class="form-group mb-1">
        <label>No Kendaraan</label>
        {{ Form::text('no_kendaraan',null,['class'=>'form-control'])}}
        @if ($errors->has('no_kendaraan')) <span class="help-block" style="color:red">{{ $errors->first('no_kendaraan') }}</span> @endif
    </div>

    <div class="form-group mb-1">
        <label>Jam Masuk</label>
        {{ Form::time('jam_masuk',null,['class'=>'form-control'])}}
        @if ($errors->has('jam_masuk')) <span class="help-block" style="color:red">{{ $errors->first('jam_masuk') }}</span> @endif
    </div>

    <div class="form-group mb-1">
        <label>Jam Keluar</label>
        {{ Form::time('jam_keluar',null,['class'=>'form-control'])}}
        @if ($errors->has('jam_keluar')) <span class="help-block" style="color:red">{{ $errors->first('jam_keluar') }}</span> @endif
    </div>

    <div class="form-group mb-1">
      <label>Foto Tamu</label>
      {{ Form::file('foto_tamu',['class'=>'form-control'])}}
      @if ($errors->has('foto_tamu')) <span class="help-block" style="color:red">{{ $errors->first('foto_tamu') }}</span> @endif
    </div>

    <div class="form-group mb-1">
      <label>Foto Ktp</label>
      {{ Form::file('foto_ktp',['class'=>'form-control'])}}
      @if ($errors->has('foto_ktp')) <span class="help-block" style="color:red">{{ $errors->first('foto_ktp') }}</span> @endif
    </div>

    <div class="form-group mb-1">
      <label>Foto Plat Nomor</label>
      {{ Form::file('foto_plat_nomor',['class'=>'form-control'])}}
      @if ($errors->has('foto_plat_nomor')) <span class="help-block" style="color:red">{{ $errors->first('foto_plat_nomor') }}</span> @endif
    </div>
  
  </div>
  
  <div class="card-footer">
    <div class="form-group mb-1">
        <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Simpan</button>
            
        <a href="{{ route('tamu.index') }}" class="btn btn-danger btn-sm"><i class="fas fa-backward"></i> Kembali</a>
    </div>
  </div>