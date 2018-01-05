@extends('layout.wrapper')
@section('content')
    <div class="col-lg-12">
      <div class="ibox float-e-margins">
          <div class="ibox-title">
              <h5>Kehadiran</h5>
          </div>
          <div class="ibox-content">
            <div class="table-responsive">
              <table class="table table-striped table-bordered table-hover dataTables-example" >
                <thead>
                  <tr>
                    <th rowspan="2">Divisi</th>
                    <th rowspan="2">Tanggal</th>
                    <th colspan="2">Waktu</th>
                    <th rowspan="2">Kegiatan Yang Dilakukan</th>
                    <th rowspan="2">Hasil yang Dicapai</th>
                    <th rowspan="2">keterangan Kegiatan</th>
                    <th rowspan="2">Paraf</th>
                  </tr>
                  <tr>
                    <th>Datang</th>
                    <th>Pulang</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
@endsection
