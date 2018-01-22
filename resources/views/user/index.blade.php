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
                <th>Role</th>
              </thead>
              <tbody>
                @foreach ($user as $data)
                  <tr onclick="document.getElementById('{{$data->id}}').click();">
                    <a id="{{$data->id}}" href="user/e/{{$data->id}}" style="display:none"></a>
                    <td>{{$data->nama}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->telp}}</td>
                    <td>{{$data->alamat}}</td>
                    <td>
                      @foreach($role as $d_role)
                        @if($data->id_role == $d_role->id_role)
                          {{$d_role->role}}
                        @endif
                      @endforeach
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <a href="user/add" class="btn btn-primary" style="margin-bottom:20px;margin-top: -25px; ">Add</a>
        </div>
      </div>
    </div>
@endsection
