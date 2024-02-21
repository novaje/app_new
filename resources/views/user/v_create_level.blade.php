@extends('kerangka.v_dashboard')

@section('content')
<div class="iq-navbar-header" style="height: 215px;">
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center">
                    <!-- Elemen h1 dihapus -->
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
                    <h4 class="card-title">Form Tambah Level</h4>
                </div>
            </div>
            <div class="card-body flex-grow-1">
                <form method="post" action="{{ route('user.createlevel') }}">
                    @csrf
                    <div class="form-group">
                        <label class="form-label" for="level">Level:</label>
                        <input type="text" name="level" class="form-control @error('level') is invalid
                        @enderror" value="{{ old('level') }}" id="level">
                        @error('level')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="submit" class="btn btn-danger">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection