@extends('kerangka.v_dashboard')

@section('content')

<div class="content-inner container-fluid pb-0" id="page_layout">
   <div class="row">
      <div class="col-sm-12">
      <div class="card w-100">
         <div class="card-header d-flex justify-content-between">
            <div class="header-title">
            <h4 class="card-title text-center">DATA LEVEL</h4> <br>
            <a class="btn btn-success" href="{{ route('user.v_create_level') }}">
               <span class="qompac-icon qompac-icon-plus"></span> Tambah Level
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
         {{-- <h4 class="mb-3">Data Level User</h4> --}}
            <div class="table-responsive border rounded">
            <!-- Melebarkan tabel -->
            <table id="datatable" class="table w-100" data-toggle="data-table">
               <thead>
                   <tr>
                       <th>No</th>
                       <th>Level User</th>
                       <th>Proses</th>
                   </tr>
               </thead>
               <tbody>
                  @foreach ($dataLevel as $data)
                  <tr>
                     <td>{{$loop->iteration}}</td>
                    <td>{{ $data->level }}</td>
                    <td>
                     <div class="d-flex">
                        <a class="btn btn-warning mx-2" 
                           href="{{ route('user.edit', $data->id) }}">Edit</a>
                           <form action="{{ route('user.destroy', $data->id) }}" method="POST">
                              @csrf
                              @method('delete')
                              <button class="btn btn-danger mx-2">Delete</button>
                           </form>
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
</div>
    
@endsection