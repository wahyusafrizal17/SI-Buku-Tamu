<div class="card-body">

    <div class="form-group mb-1">
        <label>Nama PT</label>
        {{ Form::text('nama_pt',null,['class'=>'form-control'])}}
        @if ($errors->has('nama_pt')) <span class="help-block" style="color:red">{{ $errors->first('nama_pt') }}</span> @endif
    </div>

    <div class="form-group mb-1">
        <label>Jenis Pekerjaan</label>
        {{ Form::text('jenis_pekerjaan',null,['class'=>'form-control'])}}
        @if ($errors->has('jenis_pekerjaan')) <span class="help-block" style="color:red">{{ $errors->first('jenis_pekerjaan') }}</span> @endif
    </div>

    <div class="form-group mb-1">
        <label>Jumlah Pekerjan</label>
        {{ Form::text('jumlah_pekerja',null,['class'=>'form-control'])}}
        @if ($errors->has('jumlah_pekerja')) <span class="help-block" style="color:red">{{ $errors->first('jumlah_pekerja') }}</span> @endif
    </div>

    <div class="form-group mb-1">
        <label>Tanggal</label>
        {{ Form::date('tanggal',null,['class'=>'form-control'])}}
        @if ($errors->has('tanggal')) <span class="help-block" style="color:red">{{ $errors->first('tanggal') }}</span> @endif
    </div>

    <div class="form-group mb-1">
      <label>Foto Ktp</label>
      {{ Form::file('foto_ktp',['class'=>'form-control'])}}
      @if ($errors->has('foto_ktp')) <span class="help-block" style="color:red">{{ $errors->first('foto_ktp') }}</span> @endif
    </div>
  
  </div>
  
  <div class="card-footer">
    <div class="form-group mb-1">
        <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Simpan</button>
            
        <a href="{{ route('agenda-dan-kegiatan.index') }}" class="btn btn-danger btn-sm"><i class="fas fa-backward"></i> Kembali</a>
    </div>
  </div>