@extends('layout.wrapper')
@section('content')
    <div class="col-lg-12">
      <div class="ibox float-e-margins">
          <div class="ibox-title">
              <h5>Jurnal</h5>
          </div>
          <div class="ibox-content">
            <div class="table-responsive">
              <table class="table table-striped table-hover dataTables-example">
                <thead>
                  <tr>
                    <th rowspan="2">Hari Ke-</th>
                    <th colspan="2">Hari/Tanggal</th>
                    <th rowspan="2">Paraf</th>
                    <th rowspan="2">Keterangan</th>
                  </tr>
                  <tr>
                    <th>Datang</th>
                    <th>Pulang</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($kehadiran as $data)
                    <tr>
                      <td>{{$data->id_kehadiran}}</td>
                      <td>{{$data->datang}}</td>
                      <td>{{$data->pulang}}</td>
                      <td>@if ($data->paraf == "0") Tidak @else Ya @endif</td>
                      <td>{{$data->ket}}</td>
                      {{-- <td><input type="checkbox" name="" value="" @if ($data->paraf == "1") checked readonly @endif></td> --}}
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <a href="kehadiran/add" class="btn btn-primary" @if ($today > 0) disabled @endif>Absen Hari Ini</a>
          </div>
        </div>
      </div>
@endsection
