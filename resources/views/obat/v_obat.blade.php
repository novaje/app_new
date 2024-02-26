@extends('kerangka.v_dashboard')

@section('content')
<div class="content-inner container-fluid pb-0" id="page_layout">
    <div class="row">
       <div class="col-sm-12">
       <div class="card w-100">
          <div class="card-header d-flex justify-content-between">
             <div class="header-title">
             <h4 class="card-title text-center">DATA OBAT</h4> <br>               
             </div>   
          </div>
          <div class="card-body">
             <div class="table-responsive border rounded">
                <form action="" method="GET">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-5 mb-3">
                            <label for="jenis_obat" style="margin-top: 2%;">Kategori:</label>
                            <select class="form-control" id="jenis_obat" name="jenis_obat" style="margin-top: 10px;">
                                <option value="">-- Pilih Kategori --</option>
                                <option value="obat">Obat-Obatan</option>
                                <option value="bmhp">BMHP</option>
                                <option value="gigi">Gigi</option>
                                <option value="regensia">Regensia</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label>&nbsp;</label>
                            <button type="submit" class="btn btn-primary btn-block btn-sm">Cari</button>
                        </div>
                    </div>
                </form>
             </div>
          </div>
       </div>
    </div>
 </div>
 </div>
@endsection