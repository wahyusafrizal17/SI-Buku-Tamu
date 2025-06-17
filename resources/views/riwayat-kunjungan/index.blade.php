@extends('layouts.app')
@section('title','Manage Slider Image')
@section('content')

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
         <div class="content-header row" >
            <div class="content-header-left col-md-9 col-12 mb-1">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Riwayat Kunjungan</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('riwayat-kunjungan.index') }}">Riwayat Kunjungan</a>
                                </li>
                                <li class="breadcrumb-item active">index
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="content-body">
                <!-- Dashboard Analytics Start -->
                <section id="dashboard-analytics">
                  <div class="row">
                    @foreach($model as $row)
                        <div class="col-lg-4 col-md-6 col-12">
                        <div class="card card-developer-meetup">
                            <div class="meetup-img-wrapper rounded-top text-center">
                                <img src="../../../app-assets/images/illustration/email.svg" alt="Meeting Pic" height="170">
                            </div>
                            <div class="card-body">
                                <div class="meetup-header d-flex align-items-center">
                                    <div class="meetup-day">
                                        <h6 class="mb-0">PREVIEW</h6>
                                        {{-- <h3 class="mb-0">24</h3> --}}
                                    </div>
                                    <div class="my-auto">
                                        <h4 class="card-title mb-25">{{ $row->nama }}</h4>
                                        <p class="card-text mb-0">{{ $row->instansi }}</p>
                                    </div>
                                </div>
                                {{-- <hr> --}}
                                <div class="d-flex flex-row meetings">
                                    <div class="avatar bg-light-primary rounded me-1">
                                        <div class="avatar-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar avatar-icon font-medium-3"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                        </div>
                                    </div>
                                    <div class="content-body">
                                        <h6 class="mb-0">{{ $row->jam_masuk }}</h6>
                                        <small>Jam Masuk</small>
                                    </div>
                                </div>
                                <div class="d-flex flex-row meetings">
                                    <div class="avatar bg-light-primary rounded me-1">
                                        <div class="avatar-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar avatar-icon font-medium-3"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                        </div>
                                    </div>
                                    <div class="content-body">
                                        <h6 class="mb-0">{{ $row->jam_keluar }}</h6>
                                        <small>Jam Keluar</small>
                                    </div>
                                </div>
                                <div class="d-flex flex-row meetings">
                                    <div class="avatar bg-light-primary rounded me-1">
                                        <div class="avatar-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar avatar-icon font-medium-3"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                        </div>
                                    </div>
                                    <div class="content-body">
                                        <h6 class="mb-0">{{ \Carbon\Carbon::parse($row->created_at)->translatedFormat('d F Y') }}</h6>
                                        <small>Tanggal</small>
                                    </div>
                                </div>
                                <div class="d-flex flex-row meetings">
                                    <div class="avatar bg-light-primary rounded me-1">
                                        <div class="avatar-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin avatar-icon font-medium-3"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                        </div>
                                    </div>
                                    <div class="content-body">
                                        <h6 class="mb-0">Alamat</h6>
                                        <small>{{ $row->alamat }}</small>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-4">
                                        <img src="{{ asset('dokumen-tamu/'.$row->foto_tamu) }}" alt="" width="100%">
                                        <label>Foto Tamu</label>
                                        {{-- <a href="{{ asset('dokumen/'.$row->foto_tamu) }}" target="_blank" class="btn btn-primary btn-sm"><i data-feather='download'></i> TAMU</a> --}}
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('dokumen-tamu/'.$row->foto_ktp) }}" alt="" width="100%">
                                        <label>Foto KTP</label>
                                        {{-- <a href="{{ asset('dokumen/'.$row->foto_ktp) }}" target="_blank" class="btn btn-primary btn-sm"><i data-feather='download'></i> KTP</a> --}}
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{ asset('dokumen-tamu/'.$row->foto_plat_nomor) }}" alt="" width="100%">
                                        <label>Foto Plat Nomor</label>
                                        {{-- <a href="{{ asset('dokumen/'.$row->foto_plat_nomor) }}" target="_blank" class="btn btn-primary btn-sm"><i data-feather='download'></i> PLAT</a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                  </div>

                    <!--/ List DataTable -->
                </section>
                <!-- Dashboard Analytics end -->

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
         title: 'Apakah kamu yakin ?',
         text: "Data akan terhapus secara permanen !",
         type: 'warning',
         icon: 'warning',
         buttons:{
            confirm: {
               text : 'Ya, saya yakin!',
               className : 'btn btn-success'
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
               cache: false,
               data: {
                  "_token": "{{ csrf_token() }}",
                  "id" :id
               },
               success: function(data){
                  swal("Good job!", "You clicked the button!", {
                     icon : "success",
                     buttons: {        			
                        confirm: {
                           className : 'btn btn-success'
                        }
                     },
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