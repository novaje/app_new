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
                    <h4 class="card-title">Form Tambah Saldo Awal</h4>
                </div>
            </div>
            <div class="card-body flex-grow-1">
                <form method="post" action="">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="level">Anggaran Tahun :</label>
                        <input type="text" name="tahun_anggaran" class="form-control @error('tahun_anggaran') is invalid
                        @enderror" value="{{ old('tahun_anggaran') }}" id="tahun_anggaran">
                        @error('tahun_anggaran')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        @foreach($dataSaldo as $saldoAwalTahun)
                            <label class="form-label" for="level">Nama Puskesmas :</label>
                            <select name="nama_puskesmas" class="form-control @error('nama_puskesmas') is-invalid @enderror" id="nama_puskesmas">
                                @foreach($saldoAwalTahun->unit_puskesmas as $unit)
                                    <option value="{{ $unit->nama_puskesmas }}">{{ $unit->nama_puskesmas }}</option>
                                @endforeach
                            </select>
                            @error('nama_puskesmas')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        @endforeach
                    </div>                                
                    <div class="form-group">
                        <label class="form-label" for="level">Saldo Bank :</label>
                        <input type="text" name="saldo_bank" class="form-control @error('saldo_bank') is invalid
                        @enderror" value="{{ old('saldo_bank') }}" id="saldo_bank">
                        @error('saldo_bank')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="level">Saldo Tunai :</label>
                        <input type="text" name="saldo_tunai" class="form-control @error('saldo_tunai') is invalid
                        @enderror" value="{{ old('saldo_tunai') }}" id="saldo_tunai">
                        @error('saldo_tunai')
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