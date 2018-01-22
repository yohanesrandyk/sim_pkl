@extends('layout.wrapper')
    @section('content')
    <div class="col-lg-12">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Rayon</h5>
        </div>
        <div class="ibox-content">
          <form class="form-horizontal m-t-md" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Nama Rayon</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="rayon" required>
                </div>
            </div>
            <input type="submit" class="btn btn-primary" name="submit" value="Save">
          </form>
        </div>
      </div>
    </div>
    @endsection
