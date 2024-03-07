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
                                    <th style="text-align: center;">No</th>
                                    <th style="text-align: center;">Kode Rekening</th>
                                    <th style="text-align: center;">Nama Rekening</th>
                                    <th style="text-align: center;"></th>
                                    <th style="text-align: center;">Act</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dataRekening as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->kd_rekening }}</td>
                                        <td>{{ $data->nm_rekening }}</td>
                                        <td>
                                            <button type="button" class="btn btn-danger btn-sm" onclick="toggleSubTable({{ $loop->iteration }})">
                                                  Open Rekening Object
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-right-circle-fill" viewBox="0 0 16 16">
                                                    <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m5.904-2.803a.5.5 0 1 0-.707.707L9.293 10H6.525a.5.5 0 0 0 0 1H10.5a.5.5 0 0 0 .5-.5V6.525a.5.5 0 0 0-1 0v2.768z"/>
                                                  </svg>
                                            </button>
                                            <!-- Sub-table untuk rekening objek -->
                                            <div id="subTable{{ $loop->iteration }}" class="table-responsive sub-table" style="display: none;">
                                                <div class="ml-3 mt-3">
                                                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#addDataModal">
                                                        Tambah Rekening
                                                    </button>
                                                </div>
                                                <table class="table table-bordered">
                                                    <!-- Isi sub-table rekening objek -->
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 50%;">#</th>
                                                            <th style="width: 50%;">Kode Rekening</th>
                                                            <th style="width: 75%;">Nama Rekening Object</th>
                                                            <th style="width: 50%;">Act</th>
                                                            <!-- Tambahkan kolom sesuai kebutuhan -->
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- Isi data rekening objek -->
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Data 1</td>
                                                            <td>Data 2</td>
                                                            <td><div class="flex">
                                                                <div class="d-flex justify-content-evenly">
                                                                    <a class="btn btn-primary btn-icon btn-sm rounded-pill ms-2" href="" role="button">
                                                                        <span class="btn-inner">
                                                                            <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                <path opacity="0.4" d="M19.9927 18.9534H14.2984C13.7429 18.9534 13.291 19.4124 13.291 19.9767C13.291 20.5422 13.7429 21.0001 14.2984 21.0001H19.9927C20.5483 21.0001 21.0001 20.5422 21.0001 19.9767C21.0001 19.4124 20.5483 18.9534 19.9927 18.9534Z" fill="currentColor"></path>
                                                                                <path d="M10.309 6.90385L15.7049 11.2639C15.835 11.3682 15.8573 11.5596 15.7557 11.6929L9.35874 20.0282C8.95662 20.5431 8.36402 20.8344 7.72908 20.8452L4.23696 20.8882C4.05071 20.8903 3.88775 20.7613 3.84542 20.5764L3.05175 17.1258C2.91419 16.4915 3.05175 15.8358 3.45388 15.3306L9.88256 6.95545C9.98627 6.82108 10.1778 6.79743 10.309 6.90385Z" fill="currentColor"></path>
                                                                                <path opacity="0.4" d="M18.1208 8.66544L17.0806 9.96401C16.9758 10.0962 16.7874 10.1177 16.6573 10.0124C15.3927 8.98901 12.1545 6.36285 11.2561 5.63509C11.1249 5.52759 11.1069 5.33625 11.2127 5.20295L12.2159 3.95706C13.126 2.78534 14.7133 2.67784 15.9938 3.69906L17.4647 4.87078C18.0679 5.34377 18.47 5.96726 18.6076 6.62299C18.7663 7.3443 18.597 8.0527 18.1208 8.66544Z" fill="currentColor"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                    <form action="" method="POST">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <button class="btn btn-primary btn-icon btn-sm rounded-pill ms-2" type="">
                                                                            <span class="btn-inner">
                                                                                <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                                    <path opacity="0.4" d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z" fill="currentColor"></path>
                                                                                    <path d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z" fill="currentColor"></path>
                                                                                </svg>
                                                                            </span>
                                                                        </button>
                                                                    </form>                                                       
                                                                </div>
                                                            </div>
                                                            </td>
                                                        <!-- Tambahkan data sesuai kebutuhan -->
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                        {{-- end sub table --}}
                                        <td><div class="flex">
                                            <div class="d-flex justify-content-evenly">
                                                <a class="btn btn-primary btn-icon btn-sm rounded-pill ms-2" href="" role="button">
                                                    <span class="btn-inner">
                                                        <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.4" d="M19.9927 18.9534H14.2984C13.7429 18.9534 13.291 19.4124 13.291 19.9767C13.291 20.5422 13.7429 21.0001 14.2984 21.0001H19.9927C20.5483 21.0001 21.0001 20.5422 21.0001 19.9767C21.0001 19.4124 20.5483 18.9534 19.9927 18.9534Z" fill="currentColor"></path>
                                                            <path d="M10.309 6.90385L15.7049 11.2639C15.835 11.3682 15.8573 11.5596 15.7557 11.6929L9.35874 20.0282C8.95662 20.5431 8.36402 20.8344 7.72908 20.8452L4.23696 20.8882C4.05071 20.8903 3.88775 20.7613 3.84542 20.5764L3.05175 17.1258C2.91419 16.4915 3.05175 15.8358 3.45388 15.3306L9.88256 6.95545C9.98627 6.82108 10.1778 6.79743 10.309 6.90385Z" fill="currentColor"></path>
                                                            <path opacity="0.4" d="M18.1208 8.66544L17.0806 9.96401C16.9758 10.0962 16.7874 10.1177 16.6573 10.0124C15.3927 8.98901 12.1545 6.36285 11.2561 5.63509C11.1249 5.52759 11.1069 5.33625 11.2127 5.20295L12.2159 3.95706C13.126 2.78534 14.7133 2.67784 15.9938 3.69906L17.4647 4.87078C18.0679 5.34377 18.47 5.96726 18.6076 6.62299C18.7663 7.3443 18.597 8.0527 18.1208 8.66544Z" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </a>
                                                <form action="" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-primary btn-icon btn-sm rounded-pill ms-2" type="">
                                                        <span class="btn-inner">
                                                            <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.4" d="M19.643 9.48851C19.643 9.5565 19.11 16.2973 18.8056 19.1342C18.615 20.8751 17.4927 21.9311 15.8092 21.9611C14.5157 21.9901 13.2494 22.0001 12.0036 22.0001C10.6809 22.0001 9.38741 21.9901 8.13185 21.9611C6.50477 21.9221 5.38147 20.8451 5.20057 19.1342C4.88741 16.2873 4.36418 9.5565 4.35445 9.48851C4.34473 9.28351 4.41086 9.08852 4.54507 8.93053C4.67734 8.78453 4.86796 8.69653 5.06831 8.69653H18.9388C19.1382 8.69653 19.3191 8.78453 19.4621 8.93053C19.5953 9.08852 19.6624 9.28351 19.643 9.48851Z" fill="currentColor"></path>
                                                                <path d="M21 5.97686C21 5.56588 20.6761 5.24389 20.2871 5.24389H17.3714C16.7781 5.24389 16.2627 4.8219 16.1304 4.22692L15.967 3.49795C15.7385 2.61698 14.9498 2 14.0647 2H9.93624C9.0415 2 8.26054 2.61698 8.02323 3.54595L7.87054 4.22792C7.7373 4.8219 7.22185 5.24389 6.62957 5.24389H3.71385C3.32386 5.24389 3 5.56588 3 5.97686V6.35685C3 6.75783 3.32386 7.08982 3.71385 7.08982H20.2871C20.6761 7.08982 21 6.75783 21 6.35685V5.97686Z" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </button>
                                                </form>                                                       
                                                </div>
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
 </div>
@endsection