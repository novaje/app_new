{{-- home --}}

@extends('kerangka.v_dashboard')

@section('content')

<div class="content-inner container-fluid pb-0" id="page_layout">
    <div class="d-flex justify-content-between align-items-center flex-wrap mb-5 gap-3">
    <div class="d-flex flex-column">
        <h3>APLIKASI JKN</h3>
        {{-- <p class="mb-0">Financial Dashboard</p> --}}
    </div>
    <div class="d-flex justify-content-between align-items-center rounded flex-wrap gap-3">
        <div class="form-group mb-0">
            <input type="text" name="start" class="form-control range_flatpicker flatpickr-input active" placeholder="24 Jan 2022 to 23 Feb 2022" readonly="readonly">
        </div>
        <button type="button" class="btn btn-primary">Analytics</button>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-8 col-xl-8">
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <div class="header-title">
                    <h4 class=" card-title">Date</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="course-picker">
                    <input type="hidden" name="inline" class="d-none inline_flatpickr">
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    
@endsection