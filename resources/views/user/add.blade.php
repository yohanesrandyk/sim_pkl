@extends('layout.wrapper')
  @section('content')
    @if ($errors->has('username'))
      <div class="alert alert-warning alert-dismissable"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
      {{ $errors->first('username') }}</div>
    @endif
    @if ($errors->has('email'))
      <div class="alert alert-warning alert-dismissable"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
      {{ $errors->first('email') }}</div>
    @endif
    @if ($errors->has('password'))
      <div class="alert alert-warning alert-dismissable"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
      {{ $errors->first('password') }}</div>
    @endif
    @if ($errors->has('password_confirmation'))
      <div class="alert alert-warning alert-dismissable"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
      {{ $errors->first('password_confirmation') }}</div>
     @endif
    <div class="col-lg-12">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>User</h5>
        </div>
        <div class="ibox-content">
          <form class="form-horizontal m-t-md" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" required value="{{ old('nama') }}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Telpon</label>
                <div class="col-sm-10">
                    <input type="tel" class="form-control" name="telp" value="{{ old('telp') }}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Tempat Lahir</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="bop" required value="{{ old('bop') }}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" name="bod" required value="{{ old('bod') }}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Alamat</label>
                <div class="col-sm-10">
                  <textarea name="alamat" class="form-control">{{ old('alamat') }}</textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="username" required value="{{ old('username') }}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" required value="{{ old('email') }}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" name="password" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Confirm Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" name="password_confirmation" required>
                </div>
            </div>
            <input type="submit" class="btn btn-primary" name="submit" value="Save">
          </form>
        </div>
      </div>
    </div>
  @endsection
