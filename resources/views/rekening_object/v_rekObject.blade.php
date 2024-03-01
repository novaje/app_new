@extends('kerangka.v_dashboard')

@section('content')
<div class="content-inner container-fluid pb-0" id="page_layout">
    <div class="row">
       <div class="col-sm-12">
       <div class="card w-100">
          <div class="card-header d-flex justify-content-between">
             <div class="header-title">
             <h4 class="card-title text-center">DATA REKENING-OBJECT</h4> <br>
             <a class="btn btn-success" href="{{ route('rekobject.create') }}">
                <span class="qompac-icon qompac-icon-plus"></span> Tambah Rekening
            </a>                 
             </div>
             @if (session()->has('success'))
             <div class="alert alert-success alert-dismissible fade show" role="alert">
                 {{ session('success') }}
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>
         @elseif (session()->has('failed'))
             <div class="alert alert-danger alert-dismissible fade show" role="alert">
                 {{ session('failed') }}
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>
         @endif    
          </div>
          <div class="card-body">
             <div class="table-responsive border rounded">
             <!-- Melebarkan tabel -->
             <table id="datatable" class="table w-100" data-toggle="data-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Rekening</th>
                        <th>Nama Rekening</th>
                        <th>Kode</th>
                        <th>Ket</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataRekening as $data)
                   <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->kd_rekening }}</td>
                    <td>{{ $data->nm_rekening }}</td>
                    <td>{{ $data->id_Rek }}</td>
                    <td><a href="{{ route('rekobject.getRekening', $data->id) }}" class="btn btn-success btn-sm">Tambah Rekening Object</a></td>
                    <td><button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#myModal{{ $data->kd_rekening }}">View</button></td>
                   </tr>
                   <!-- Modal -->
                   <div class="modal fade" id="myModal{{ $data->kd_rekening }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content bg-dark">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Data Rekening</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            {{-- card --}}
                            <div class="modal-body text-light bg-dark">
                                <div class="card">
                                    <div class="card-body">
                                        Kode Rekening: {{ $data->kd_rekening }}
                                    </div>
                                </div>
                            </div>
                            {{-- end --}}
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            </div>
                   @endforeach
                </tbody>
            </table>
             </div>
          </div>
       </div>
    </div>
 </div>
 </div>
@endsection