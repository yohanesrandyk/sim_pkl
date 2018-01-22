@extends('layout.wrapper')
@section('content')
  <div class="col-lg-12">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Tabel Perusahaan</h5>
        </div>
        <div class="ibox-content">
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover dataTables-example" >
              <thead>
                <th>Nama Perusahaan</th>
                <th>Area Perusahaan</th>
                <th>Telpon</th>
                <th>Email</th>
                <th>Siswa Terverifikasi</th>
                <th>Siswa Pending</th>
              </thead>
              <tbody>
                @foreach ($perusahaan as $data)
                  <tr onclick="document.getElementById('{{$data->id_perusahaan}}').click();">
                    <a id="{{$data->id_perusahaan}}" href="penempatan/add/{{$data->id_perusahaan}}" style="display:none"></a>
                    <td>{{$data->perusahaan}}</td>
                    <td>{{$data->area}}</td>
                    <td>{{$data->telp}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->jumlah_verified}}</td>
                    <td>{{$data->jumlah_pending}}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  <div class="col-lg-12">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Tabel Siswa</h5>
        </div>
        <div class="ibox-content">
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover dataTables-example" >
              <thead>
                <th>NIS</th>
                <th>Nama</th>
                <th>Rayon</th>
                <th>Area PKL</th>
                <th>Perusahaan</th>
                <th>Status</th>
              </thead>
              <tbody>
                @foreach ($siswa as $data)
                  <tr>
                    <td>{{$data->nis}}</td>
                    <td>{{$data->nama}}</td>
                    <td>{{$data->rayon}}</td>
                    <td>{{$data->area}}</td>
                    <td>{{$data->perusahaan}}</td>
                    <td>{{$data->status_perusahaan}}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
@endsection
