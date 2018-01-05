@extends('layout.wrapper')
@section('content')
  <form class="" method="post">{{csrf_field()}}
  Name : <input type="text" name="nama" value="{{$siswa->nama}}" required=""><br>
  Religion : <input type="text" name="agama" value="{{$siswa->agama}}" required=""><br>
  Gender : <input type="text" name="jk" value="{{$siswa->jk}}" required=""><br>
  Phone : <input type="tel" name="telp" value="{{$siswa->telp}}" required=""><br>
  Birth Place : <input type="text" name="bop" value="{{$siswa->bop}}" required=""><br>
  Birth Date : <input type="date" name="bod" value="{{$siswa->bod}}" required=""><br>
  Address : <textarea name="alamat" rows="8" cols="80">{{$siswa->alamat}}</textarea><br>
  <input type="submit" name="submit" value="SUBMIT">
  </form>
@endsection
