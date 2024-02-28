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
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataRekening as $data)
                   <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->kd_rekening }}</td>
                    <td>{{ $data->nm_rekening }}</td>
                   </tr>
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