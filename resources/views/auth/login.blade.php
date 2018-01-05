<form class="form-horizontal" method="POST" action="{{ route('login') }}">{{ csrf_field() }}
<input type="text" name="username" value=""><br>
<input type="password" name="password" value=""><br>
<label><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me</label><br>
<button type="submit" class="btn btn-primary">Login</button><br>
<a class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?</a>
</form>
