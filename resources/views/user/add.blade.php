@extends('layout.wrapper')
@section('content')
  <form class="" method="post">{{csrf_field()}}
  Name : <input type="text" name="nama" value="{{ old('nama') }}" required=""><br>
  Phone : <input type="tel" name="telp" value="{{ old('telp') }}" required=""><br>
  Birth Place : <input type="text" name="bop" value="{{ old('bop') }}" required=""><br>
  Birth Date : <input type="date" name="bod" value="{{ old('bod') }}" required=""><br>
  Address : <textarea name="alamat" rows="8" cols="80">{{ old('alamat') }}</textarea><br>
  Username : <input type="text" name="username" value="{{ old('username') }}" required autofocus>
  @if ($errors->has('username')) {{ $errors->first('username') }} @endif <br>
  Email : <input type="email" name="email" value="{{ old('email') }}" required>
  @if ($errors->has('email')) {{ $errors->first('email') }} @endif <br>
  Password : <input type="password" name="password" required>
  @if ($errors->has('password')) {{ $errors->first('password') }} @endif <br>
  Confirm Password : <input type="password" name="password_confirmation" required>
  @if ($errors->has('password_confirmation')) {{ $errors->first('password_confirmation') }} @endif <br>
  <input type="submit" name="submit" value="SUBMIT">
  </form>
@endsection
