<div class="card-body">

    <div class="form-group mb-1">
        <label>Nama Pengirim</label>
        {{ Form::text('nama_pengirim',null,['class'=>'form-control'])}}
        @if ($errors->has('nama_pengirim')) <span class="help-block" style="color:red">{{ $errors->first('nama_pengirim') }}</span> @endif
    </div>

    <div class="form-group mb-1">
        <label>Instansi</label>
        {{ Form::text('nama_instansi',null,['class'=>'form-control'])}}
        @if ($errors->has('nama_instansi')) <span class="help-block" style="color:red">{{ $errors->first('nama_instansi') }}</span> @endif
    </div>

    <div class="form-group mb-1">
        <label>Nama Penerima</label>
        {{ Form::text('nama_penerima',null,['class'=>'form-control'])}}
        @if ($errors->has('nama_penerima')) <span class="help-block" style="color:red">{{ $errors->first('nama_penerima') }}</span> @endif
    </div>

    <div class="form-group mb-1">
        <label>Tujuan</label>
        {{ Form::text('tujuan',null,['class'=>'form-control'])}}
        @if ($errors->has('tujuan')) <span class="help-block" style="color:red">{{ $errors->first('tujuan') }}</span> @endif
    </div>

    <div class="form-group mb-1">
        <label>Tanggal</label>
        {{ Form::date('tanggal',null,['class'=>'form-control'])}}
        @if ($errors->has('tanggal')) <span class="help-block" style="color:red">{{ $errors->first('tanggal') }}</span> @endif
    </div>

    <div class="form-group mb-1">
        <label>Jam</label>
        {{ Form::time('jam',null,['class'=>'form-control'])}}
        @if ($errors->has('jam')) <span class="help-block" style="color:red">{{ $errors->first('jam') }}</span> @endif
    </div>

    <div class="form-group mb-1">
      <label>Foto Penyerahan Surat</label>
      {{ Form::file('foto_penyerahan_surat',['class'=>'form-control'])}}
      @if ($errors->has('foto_penyerahan_surat')) <span class="help-block" style="color:red">{{ $errors->first('foto_penyerahan_surat') }}</span> @endif
    </div>
  
  </div>
  
  <div class="card-footer">
    <div class="form-group mb-1">
        <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Simpan</button>
            
        <a href="{{ route('ekpedisi-surat.index') }}" class="btn btn-danger btn-sm"><i class="fas fa-backward"></i> Kembali</a>
    </div>
  </div>