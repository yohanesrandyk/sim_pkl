@extends('layout.wrapper')
@section('content')
  <div class="col-lg-12">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Tabel Rayon</h5>
        </div>
        <div class="ibox-content">
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover dataTables-example" >
              <thead>
                <th>Rayon</th>
              </thead>
              <tbody>
                @foreach ($rayon as $data)
                  <tr>
                    <td>{{$data->rayon}}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <a href="rayon/add" class="btn btn-primary">Add</a>
        </div>
      </div>
  </div>
  <div class="col-lg-12">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Tabel Rombel</h5>
        </div>
        <div class="ibox-content">
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover dataTables-example" >
              <thead>
                <th>Rombel</th>
              </thead>
              <tbody>
                @foreach ($rombel as $data)
                  <tr>
                    <td>{{$data->rombel}}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <a href="rombel/add" class="btn btn-primary">Add</a>
        </div>
      </div>
  </div>
  <div class="col-lg-12">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Tabel Jurusan</h5>
        </div>
        <div class="ibox-content">
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover dataTables-example" >
              <thead>
                <th>Jurusan</th>
              </thead>
              <tbody>
                @foreach ($jurusan as $data)
                  <tr>
                    <td>{{$data->jurusan}}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <a href="jurusan/add" class="btn btn-primary">Add</a>
        </div>
      </div>
  </div>
@endsection
