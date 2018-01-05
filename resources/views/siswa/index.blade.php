@extends('layout.wrapper')
@section('content')
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
                <th>Jurusan</th>
                <th>Rombel</th>
                <th>JK</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Alamat</th>
              </thead>
              <tbody>
                @foreach ($siswa as $data)
                  <tr>
                    <td>{{$data->nis}}</td>
                    <td>{{$data->nama}}</td>
                    <td>{{$data->rayon}}</td>
                    <td>{{$data->jurusan}}</td>
                    <td>{{$data->rombel}}</td>
                    <td>{{$data->jk}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->telp}}</td>
                    <td>{{$data->alamat}}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <a href="siswa/add" class="btn btn-primary">Add</a>
@endsection
