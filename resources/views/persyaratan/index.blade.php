@extends('layout.wrapper')
@section('content')
  <div class="col-lg-12">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Tabel Persyaratan</h5>
        </div>
        <div class="ibox-content">
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover dataTables-example" >
              <thead>
                <th>NIS</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Rayon</th>
                <th>Pramuka</th>
                <th>Nilai</th>
                <th>Keuangan</th>
                <th>Kesiswaan</th>
                <th>CBT Produktif</th>
                <th>Kehadiran Pengayaan</th>
                <th>Uji Kelayakan</th>
                <th>Perpustakaan</th>
              </thead>
              <tbody>
                @foreach ($siswa as $data)
                  <tr>
                    <td>{{$data->nis}}</td>
                    <td>{{$data->nama}}</td>
                    <td>{{$data->jurusan}}</td>
                    <td>{{$data->rayon}}</td>
                    <td><input type="checkbox" name="" @if ($data->bantara > 0) checked @endif></td>
                    <td><input type="checkbox" name="" @if ($data->nilai > 0) checked @endif></td>
                    <td><input type="checkbox" name="" @if ($data->keuangan > 0) checked @endif></td>
                    <td><input type="checkbox" name="" @if ($data->kesiswaan > 0) checked @endif></td>
                    <td><input type="checkbox" name="" @if ($data->cbt_prod > 0) checked @endif></td>
                    <td><input type="checkbox" name="" @if ($data->kehadiran_pengayaan > 0) checked @endif></td>
                    <td><input type="checkbox" name="" @if ($data->ujikel > 0) checked @endif></td>
                    <td><input type="checkbox" name="" @if ($data->perpus > 0) checked @endif></td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
@endsection
