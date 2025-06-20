@extends('layouts.app')

@section('title', 'Manage Slider Image')

@section('content')
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>

    <div class="content-wrapper container-xxl p-0">
        <!-- Header -->
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-1">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Riwayat Kunjungan</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('riwayat-kunjungan.index') }}">Riwayat Kunjungan</a>
                                </li>
                                <li class="breadcrumb-item active">Index</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="content-body">
            <section id="dashboard-analytics">
                <!-- Filter Form -->
                <div class="row justify-content-end mb-3">
                    <div class="col-md-5">
                        <form action="{{ url()->current() }}" method="GET" class="input-group">
                            <input type="date" class="form-control" id="filterDate" name="filter" value="{{ request('filter') }}">
                            <button class="btn btn-primary waves-effect" type="submit">Filter</button>
                        </form>
                    </div>
                </div>

                @php
                    use Carbon\Carbon;
                    $tanggal = request('filter') ? Carbon::parse(request('filter')) : Carbon::now();
                @endphp

                <div class="alert alert-primary p-1">
                    <p>Menampilkan data kunjungan untuk tanggal <strong>{{ $tanggal->translatedFormat('d F Y') }}</strong></p>
                </div>

                <!-- Cards -->
                <div class="row mt-3">
                    @forelse($model as $row)
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="card card-developer-meetup">
                                <div class="meetup-img-wrapper rounded-top text-center">
                                    <img src="../../../app-assets/images/illustration/email.svg" alt="Meeting Pic" height="170">
                                </div>
                                <div class="card-body">
                                    <div class="meetup-header d-flex align-items-center">
                                        <div class="meetup-day">
                                            <h6 class="mb-0">PREVIEW</h6>
                                        </div>
                                        <div class="my-auto">
                                            <h4 class="card-title mb-25">{{ $row->nama }}</h4>
                                            <p class="card-text mb-0">{{ $row->instansi }}</p>
                                        </div>
                                    </div>

                                    <!-- Jam Masuk -->
                                    <div class="d-flex flex-row meetings">
                                        <div class="avatar bg-light-primary rounded me-1">
                                            <div class="avatar-content">
                                                <i data-feather="clock" class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div class="content-body">
                                            <h6 class="mb-0">{{ $row->jam_masuk }}</h6>
                                            <small>Jam Masuk</small>
                                        </div>
                                    </div>

                                    <!-- Jam Keluar -->
                                    <div class="d-flex flex-row meetings">
                                        <div class="avatar bg-light-primary rounded me-1">
                                            <div class="avatar-content">
                                                <i data-feather="clock" class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div class="content-body">
                                            <h6 class="mb-0">{{ $row->jam_keluar }}</h6>
                                            <small>Jam Keluar</small>
                                        </div>
                                    </div>

                                    <!-- Tanggal -->
                                    <div class="d-flex flex-row meetings">
                                        <div class="avatar bg-light-primary rounded me-1">
                                            <div class="avatar-content">
                                                <i data-feather="calendar" class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div class="content-body">
                                            <h6 class="mb-0">{{ \Carbon\Carbon::parse($row->created_at)->translatedFormat('d F Y') }}</h6>
                                            <small>Tanggal</small>
                                        </div>
                                    </div>

                                    <!-- Alamat -->
                                    <div class="d-flex flex-row meetings">
                                        <div class="avatar bg-light-primary rounded me-1">
                                            <div class="avatar-content">
                                                <i data-feather="map-pin" class="avatar-icon font-medium-3"></i>
                                            </div>
                                        </div>
                                        <div class="content-body">
                                            <h6 class="mb-0">Alamat</h6>
                                            <small>{{ $row->alamat }}</small>
                                        </div>
                                    </div>

                                    <!-- Gambar -->
                                    <div class="row mt-2">
                                        <div class="col-md-4 text-center">
                                            <img src="{{ asset('dokumen-tamu/'.$row->foto_tamu) }}" alt="Foto Tamu" class="img-fluid mb-1">
                                            <label class="d-block">Foto Tamu</label>
                                        </div>
                                        <div class="col-md-4 text-center">
                                            <img src="{{ asset('dokumen-tamu/'.$row->foto_ktp) }}" alt="Foto KTP" class="img-fluid mb-1">
                                            <label class="d-block">Foto KTP</label>
                                        </div>
                                        <div class="col-md-4 text-center">
                                            <img src="{{ asset('dokumen-tamu/'.$row->foto_plat_nomor) }}" alt="Foto Plat Nomor" class="img-fluid mb-1">
                                            <label class="d-block">Foto Plat Nomor</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <!-- No Data -->
                        <div class="col-12 text-center my-5">
                            <div class="card p-4">
                                <img src="{{ asset('app-assets/images/calendar.png') }}" alt="No Data Found" height="200" class="mx-auto mb-3">
                                <h4 class="mb-1">Tidak ada data tamu yang ditemukan.</h4>
                                <p class="text-muted">Sepertinya belum ada tamu yang tercatat saat ini.</p>
                                {{-- <a href="#" class="btn btn-primary mt-3">Tambah Tamu Baru</a> --}}
                            </div>
                        </div>
                    @endforelse
                </div>
            </section>
        </div>
    </div>
</div>
<!-- END: Content-->
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('.delete').click(function(e) {
            var id = $(this).data('id'); 
            swal({
                title: 'Apakah kamu yakin?',
                text: "Data akan terhapus secara permanen!",
                icon: 'warning',
                buttons: {
                    confirm: {
                        text: 'Ya, saya yakin!',
                        className: 'btn btn-success'
                    },
                    cancel: {
                        visible: true,
                        className: 'btn btn-danger'
                    }
                }
            }).then((Delete) => {
                if (Delete) {
                    $.ajax({
                        url: '{{ route('tamu.delete') }}',
                        method: 'post',
                        data: {
                            _token: '{{ csrf_token() }}',
                            id: id
                        },
                        success: function(data) {
                            swal("Berhasil!", "Data telah dihapus!", {
                                icon: "success",
                                buttons: {
                                    confirm: {
                                        className: 'btn btn-success'
                                    }
                                }
                            });
                            location.reload();
                        }
                    });
                } else {
                    swal.close();
                }
            });
        });
    });
</script>
@endpush