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
                    <h4 class="card-title">Form Edit Data DPA-DPPA/ Progam-kegiatan Dana-Bos</h4>
                </div>
            </div>
            <div class="card-body flex-grow-1">
                <form method="post" action="{{ route('dpa.update', $dpa->id) }}">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="level">Tahun:</label>
                        <input type="number" name="tahun" class="form-control @error('tahun') is invalid
                        @enderror" value="{{ $dpa->tahun ?? old('tahun') }}" id="level">
                        @error('tahun')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="level">Tanggal DPA :</label>
                        <input type="date" name="tgl_dpa" class="form-control @error('tgl_dpa') is invalid
                        @enderror" value="{{ $dpa->tgl_dpa ?? old('tgl_dpa') }}" id="tgl_dpa">
                        @error('tgl_dpa')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="level">Tanggal DPPA :</label>
                        <input type="date" name="tgl_dppa" class="form-control @error('tgl_dppa') is invalid
                        @enderror" value="{{ $dpa->tgl_dppa ?? old('tgl_dppa') }}" id="level">
                        @error('tgl_dppa')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="level">No. DPA :</label>
                        <input type="text" name="no_dpa" class="form-control @error('no_dpa') is invalid
                        @enderror" value="{{ $dpa->no_dpa ?? old('no_dpa') }}" id="level">
                        @error('no_dpa')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="level">No. DPPA :</label>
                        <input type="text" name="no_dppa" class="form-control @error('no_dppa') is invalid
                        @enderror" value="{{ $dpa->no_dppa ?? old('no_dppa') }}" id="level">
                        @error('no_dppa')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="level">Program :</label>
                        <input type="text" name="program" class="form-control @error('program') is invalid
                        @enderror" value="{{ $dpa->program ?? old('program') }}" id="level">
                        @error('program')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="level">Kegiatan :</label>
                        <input type="text" name="kegiatan" class="form-control @error('kegiatan') is invalid
                        @enderror" value="{{ $dpa->kegiatan ?? old('kegiatan') }}" id="level">
                        @error('kegiatan')
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