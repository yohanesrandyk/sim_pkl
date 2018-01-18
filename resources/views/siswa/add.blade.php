@extends('layout.wrapper')
@section('content')
  @if ($errors->has('nis'))
  <div class="alert alert-warning alert-dismissable"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
  {{ $errors->first('nis') }}</div>
  @endif
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
          <h5>Siswa</h5>
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
              <label class="col-sm-2 col-sm-2 control-label">NIS</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="nis" required value="{{ old('nis') }}">
              </div>
          </div>
          <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">Agama</label>
              <div class="col-sm-10">
                <select class="form-control" name="agama" required>
                    <option value="" selected="">Pilih Agama</option>
                    <option value="Kristen" @if (old('agama')=="Kristen")@endif>Kristen</option>
                    <option value="Islam" @if (old('agama')=="Islam")@endif>Islam</option>
                    <option value="Hindu" @if (old('agama')=="Hindu")@endif>Hindu</option>
                    <option value="Buddha" @if (old('agama')=="Buddha")@endif>Buddha</option>
                </select>
              </div>
          </div>
          <div class="form-group">
              <label class="col-sm-2 col-sm-2 control-label">Jenis Kelamin</label>
              <div class="col-sm-10">
                <input type="radio" name="jk" value="L" @if (old('jk') == "L") Selected @endif required>Laki-laki<br>
                <input type="radio" name="jk" value="P" @if (old('jk') == "P") Selected @endif required>Perempuan
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
                <label class="col-sm-2 col-sm-2 control-label">Jurusan</label>
                <div class="col-sm-10">
                    <select class="form-control" name="jurusan">
                      <option value="" selected="">Pilih Jurusan</option>
                      @foreach($jurusan as $data)
                        <option value="{{$data->id_jurusan}}">{{$data->jurusan}}</option>
                      @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Rombel</label>
                <div class="col-sm-10">
                    <select class="form-control" name="rombel">
                      <option value="" selected="">Pilih Rombel</option>
                      @foreach($rombel as $data)
                        <option value="{{$data->id_rombel}}">{{$data->rombel}}</option>
                      @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Rayon</label>
                <div class="col-sm-10">
                    <select class="form-control" name="rayon">
                      <option value="" selected="">Pilih Rayon</option>
                      @foreach($rayon as $data)
                        <option value="{{$data->id_rayon}}">{{$data->rayon}}</option>
                      @endforeach
                    </select>
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
