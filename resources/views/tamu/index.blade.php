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
                        <h2 class="content-header-title float-start mb-0">Tamu</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('tamu.index') }}">Tamu</a>
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
                     <div class="col-md-12">
                        <div class="card">
                           <div class="card-header">
                              <h4 class="card-title">Data Tamu</h4>
                              <div class="d-flex gap-1">
                                 <a href="{{ route('tamu.pdf') }}" target="_blank" class="btn btn-danger btn-sm">
                                    <i data-feather='file'></i> Pdf
                                 </a>
                                 <a href="{{ route('tamu.excel') }}" target="_blank" class="btn btn-info btn-sm">
                                    <i data-feather='file'></i> Excel
                                 </a>
                                 <a href="{{ route('tamu.create') }}" class="btn btn-primary btn-sm">
                                    <i data-feather='plus'></i> Tambah
                                 </a>
                              </div>
                          </div>
                           <div class="card-body">
                              <div class="table-responsive">
                                 <table id="basic-datatables" class="display table table-striped table-hover">
                                    <thead>
                                       <tr>
                                          <th style="width: 5%">No</th>
                                          <th>Nama</th>
                                          <th>No HP</th>
                                          <th>No Identitas</th>
                                          <th>No Kendaraan</th>
                                          <th>Jam Masuk</th>
                                          <th>Jam Keluar</th>
                                          <th>Keperluan</th>
                                          <th style="width: 20%" class="text-center">Action</th>
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
                                          {{-- <td><img src="{{ asset('banner/'.$row->banner) }}" alt="" width="50%"></td> --}}
                                         <td class="text-center">
                                             <div class="form-button-action">
                                                <a href="{{ route('tamu.edit',[$row->id]) }}" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-sm" data-original-title="Edit">
                                                   <i data-feather='edit'></i>
                                                </a>
                                                <button type="button" class="btn btn-link btn-danger btn-sm delete" data-id="{{ $row->id }}">
                                                  <i data-feather='trash-2'></i>
                                               </button>
                                             </div>
                                          </td>
                                       </tr>
                                       @endforeach
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
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