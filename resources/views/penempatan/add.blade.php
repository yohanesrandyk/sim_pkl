@extends('layout.wrapper')
@section('content')
<h4>Perusahaan : {{$thisperusahaan->perusahaan}}</h4>
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
    <th></th>
  </thead>
  <tbody>
    <script type="text/javascript">
      let arr_quo = [];
      let arr_tmp = [];
    </script>
    @foreach ($siswa_quo as $data)
      <tr class="row_quo" onclick="document.getElementById('quo{{$data->id}}').click();">
        <td>{{$data->nis}}</td>
        <td>{{$data->nama}}</td>
        <td>{{$data->rayon}}</td>
        <td><div class="" onclick="document.getElementById('quo{{$data->id}}').click();">
          <input id="quo{{$data->id}}" type="checkbox" name="" value="" onclick="
            if(document.getElementById('quo{{$data->id}}').checked == true){arr_quo.push({{$data->id}});}
            else{arr_quo.splice(arr_quo.indexOf({{$data->id}}), 1);};">
        </div></td>
      </tr>
    @endforeach
  </tbody>
</table>

<input type="checkbox" name="" value="" onclick="check_quo()">Select All
</div>
<button type="button" name="button" class="btn btn-primary" onclick="
  $('#siswa').val(arr_quo);
  $('#perusahaan').val('{{$thisperusahaan->id_perusahaan}}');
  $('#status').val('0');
  document.getElementById('submit').click();
">Save</button>

</div>
</div>
</div>
<div class="col-lg-12">
  <div class="ibox float-e-margins">
      <div class="ibox-title">
          <h5>Tabel Siswa Pending</h5>
      </div>
      <div class="ibox-content">
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover dataTables-example" >
  <thead>
    <tr>
      <th>NIS</th>
      <th>Nama</th>
      <th>Rayon</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @if (count($siswa_tmp) > 0)
      @foreach ($siswa_tmp as $data)
        <tr class="row_tmp" onclick="document.getElementById('tmp{{$data->id}}').click();">
          <td>{{$data->nis}}</td>
          <td>{{$data->nama}}</td>
          <td>{{$data->rayon}}</td>
          <td><div class="" onclick="document.getElementById('tmp{{$data->id}}').click();">
            <input id="tmp{{$data->id}}" type="checkbox" name="" value="" onclick="
              if(document.getElementById('tmp{{$data->id}}').checked == true) {arr_tmp.push({{$data->id}});}
              else{arr_tmp.splice(arr_tmp.indexOf({{$data->id}}), 1);};">
          </div></td>
        </tr>
      @endforeach
    @endif
  </tbody>
</table>

<input type="checkbox" name="" value="" onclick="check_tmp()">Select All
</div>
<button type="button" name="button" class="btn btn-primary" onclick="
  $('#siswa').val(arr_tmp);
  $('#perusahaan').val('');
  $('#status').val('');
  document.getElementById('submit').click();
">Cancel</button>
<button type="button" name="button" class="btn btn-primary" onclick="
  $('#siswa').val(arr_tmp);
  $('#perusahaan').val('{{$thisperusahaan->id_perusahaan}}');
  $('#status').val('1');
  document.getElementById('submit').click();
">Done</button>
</div>
</div>
</div>

<form class="" action="#" method="post" style="display:none;">{{csrf_field()}}
  <input type="text" id="siswa" name="siswa" value="">
  <input type="text" id="perusahaan" name="perusahaan" value="">
  <input type="text" id="status" name="status" value="">
  <input type="text" id="redirect" name="redirect" value="{{$thisperusahaan->id_perusahaan}}">
  <input type="submit" id="submit" name="submit" value="">
</form>
<script type="text/javascript">
  function check_quo(){
    let row_quo = document.getElementsByClassName('row_quo');
    for (let i = 0; i < row_quo.length; i++) {
      row_quo[i].click();
    }
  }
  function check_tmp(){
    let row_tmp = document.getElementsByClassName('row_tmp');
    for (let i = 0; i < row_tmp.length; i++) {
      row_tmp[i].click();
    }
  }
</script>
@endsection
