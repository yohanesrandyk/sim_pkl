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
                @if(Auth::user()->id_role==5)
                <th>Pramuka</th>
                @endif
                @if(Auth::user()->id_role==4)
                <th>Nilai</th>
                @endif
                @if(Auth::user()->id_role==8)
                <th>Keuangan</th>
                @endif
                @if(Auth::user()->id_role==7)
                <th>Kesiswaan</th>
                @endif
                @if(Auth::user()->id_role==2)
                <th>CBT Produktif</th>
                <th>Kehadiran Pengayaan</th>
                <th>Uji Kelayakan</th>
                @endif
                @if(Auth::user()->id_role==6)
                <th>Perpustakaan</th>
                @endif
              </thead>
              <tbody>
                @foreach ($siswa as $data)
                  <tr>
                    <td>{{$data->nis}}</td>
                    <td>{{$data->nama}}</td>
                    <td>{{$data->jurusan}}</td>
                    <td>{{$data->rayon}}</td>
                    @if(Auth::user()->id_role==5)
                    <td><input type="checkbox" name="" @if ($data->bantara > 0) checked @endif></td>
                    @endif
                    @if(Auth::user()->id_role==4)
                    <td><input type="checkbox" name="" @if ($data->nilai > 0) checked @endif></td>
                    @endif
                    @if(Auth::user()->id_role==8)
                    <td><input type="checkbox" name="" @if ($data->keuangan > 0) checked @endif></td>
                    @endif
                    @if(Auth::user()->id_role==7)
                    <td><input type="checkbox" name="" @if ($data->kesiswaan > 0) checked @endif></td>
                    @endif
                    @if(Auth::user()->id_role==2)
                    <td><input type="checkbox" name="" @if ($data->cbt_prod > 0) checked @endif></td>
                    <td><input type="checkbox" name="" @if ($data->kehadiran_pengayaan > 0) checked @endif></td>
                    <td><input type="checkbox" name="" @if ($data->ujikel > 0) checked @endif></td>
                    @endif
                    @if(Auth::user()->id_role==6)
                    <td><input type="checkbox" name="" @if ($data->perpus > 0) checked @endif></td>
                    @endif
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
@endsection
