{{-- <form class="form-horizontal" method="POST" action="{{ route('login') }}">{{ csrf_field() }}
<input type="text" name="username" value=""><br>
<input type="password" name="password" value=""><br>
<label><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me</label><br>
<button type="submit" class="btn btn-primary">Login</button><br>
<a class="btn btn-link" href="{{ route('password.request') }}">Forgot Your Password?</a>
</form> --}}


<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Feb 2017 08:19:21 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SIM PKL | Login</title>

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>

<body class="gray-bg" style="background-image: src()">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div class="payment-card">
            <div>
                <h1 class="logo-name" style="color: #18a689!important;">SP</h1>
            </div>
            <p>Login untuk memulai pekerjaan Anda.</p>
            <form class="m-t" role="form" action="{{ route('login') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="password"  class="form-control" placeholder="Password" required="">
                </div>
                {{-- <div class="form-group">
                  <label> <input type="checkbox" class="i-checks"> Remember me </label>
                </div> --}}
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                {{-- <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a> --}}
            </form>
            <p class="m-t"> <small>Aplikasi penghubung PKL &copy; 2018</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

</body>
</html>
