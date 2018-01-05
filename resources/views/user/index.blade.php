@extends('layout.wrapper')
@section('content')
  <div class="col-lg-12">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Tabel User</h5>
        </div>
        <div class="ibox-content">
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover dataTables-example" >
              <thead>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Alamat</th>
              </thead>
              <tbody>
                @foreach ($user as $data)
                  <tr>
                    <td>{{$data->nama}}</td>
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
    <a href="user/add" class="btn btn-primary">Add</a>
@endsection
