@extends('kerangka.v_dashboard')

@section('content')
<div class="iq-navbar-header" style="height: 215px;">
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center">
                </div>
            </div>
        </div>
    </div>
    <div class="iq-header-img">
        <img src="{{ asset('template/assets/images/dashboard/top-header.png') }}" alt="header" class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX" loading="lazy">
        <img src="{{ asset('template/assets/images/dashboard/top-header.png') }}" alt="header" class="theme-color-purple-img img-fluid w-100 h-100 animated-scaleX" loading="lazy">
        <img src="{{ asset('template/assets/images/dashboard/top-header.png') }}" alt="header" class="theme-color-blue-img img-fluid w-100 h-100 animated-scaleX" loading="lazy">
        <img src="{{ asset('template/assets/images/dashboard/top-header.png') }}" alt="header" class="theme-color-green-img img-fluid w-100 h-100 animated-scaleX" loading="lazy">
        <img src="{{ asset('template/assets/images/dashboard/top-header.png') }}" alt="header" class="theme-color-yellow-img img-fluid w-100 h-100 animated-scaleX" loading="lazy">
        <img src="{{ asset('template/assets/images/dashboard/top-header.png') }}" alt="header" class="theme-color-pink-img img-fluid w-100 h-100 animated-scaleX" loading="lazy">
    </div>
</div>   
<div class="row flex-column align-items-center vh-100 mb-5">
    <div class="col-sm-15 col-lg-8">
        <div class="card d-flex flex-column h-100">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Form Tambah Rekening 6</h4>
                </div>
            </div>
            <div class="card-body flex-grow-1">
                <form method="post" action="{{ route('rek6.create') }}">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="level">Kode Rekening:</label>
                        <input type="text" name="kd_rek_6" class="form-control @error('kd_rek_6') is-invalid @enderror" value="{{ old('kd_rek_6') }}" id="kd_rek_6" style="max-width: 350px;">
                        @error('kd_rek_6')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>                    
                    <div class="form-group">
                        <label class="form-label" for="level">Nama Rekening :</label>
                        <input type="text" name="nm_rek_6" class="form-control @error('nm_rek_6') is invalid
                        @enderror" value="{{ old('nm_rek_6') }}" id="nm_rek_6" style="max-width: 350px;">
                        @error('nm_rek_6')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-danger">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection