@extends('layout.wrapper')
    @section('breadcrumb')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Data Perusahaan</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('/')}}">Home</a>
                </li>
                <li class="active">
                    <strong>Data Bidang Perusahaan</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">
        </div>
    </div>
    @endsection
    @section('content')
    <div class="col-lg-12">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Input Data Perusahaan</h5>
        </div>
        <div class="ibox-content">
          <form class="form-horizontal m-t-md" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Bidang *</label>
                <div class="col-sm-10">
                    <select class="select2 form-control" name="id_bidang">
                        @foreach($data_bidang as $r)
                            <option value="{{$r->id_bidang}}">{{$r->bidangperusahaan}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Nama Perusahaan *</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="namaperusahaan" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Kota *</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="kota" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Area *</label>
                <div class="col-sm-10">
                    <select class="form-control" name="id_area">
                        <option value="" selected="">Pilih Area</option>
                        <option value="1">Bogor</option>
                        <option value="2">Jabodetabek</option>
                        <option value="3">Luar Jabodetabek</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Alamat *</label>
                <div class="col-sm-10">
                    <textarea name="alamat" class="form-control required"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Kode Pos *</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="kodepos" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Telepon *</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="telepon" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Website *</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="website" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Email *</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="email" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Status *</label>
                <div class="col-sm-10">
                  <select class="form-control" name="status">
                      <option value="0">Pengajuan</option>
                      <option value="1">Terverifikasi</option>
                  </select>
                </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label"></label>
              <div class="col-sm-10">
                  <input type="submit" value="Simpan" class="btn btn-danger btn-block">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    @endsection
