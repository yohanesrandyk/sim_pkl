<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SIM | PKL</title>
    <link href="{{asset('css/bootstrap.min.css')}} "rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}} "rel="stylesheet">
    <link href="{{asset('css/style.css')}} "rel="stylesheet">
    <link href="{{asset('css/plugins/iCheck/custom.css')}} "rel="stylesheet">
    <link href="{{asset('css/plugins/chosen/bootstrap-chosen.css')}} "rel="stylesheet">
    <link href="{{asset('css/plugins/datapicker/datepicker3.css')}} "rel="stylesheet">
    <link href="{{asset('css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css')}} "rel="stylesheet">
    <link href="{{asset('css/plugins/clockpicker/clockpicker.css')}} "rel="stylesheet">
    <link href="{{asset('css/plugins/dualListbox/bootstrap-duallistbox.min.css')}}" rel="stylesheet">

    <link href="{{asset('css/plugins/select2/select2.min.css')}} "rel="stylesheet">
    <link href="{{asset('css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-notifications.min.css">

  </head>
  <body class="pace-done">
    <div id="wrapper">
      @include('layout.sidebar')
      <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            @include('layout.header')
        </div>
            @yield('breadcrumb')
        <div class="wrapper wrapper-content">
            <div class="row">
              @yield('content')
            </div>
        </div>
      </div>
    </div>
    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{asset('js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('js/plugins/dataTables/datatables.min.js')}}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{asset('js/inspinia.js')}}"></script>
    <script src="{{asset('js/plugins/pace/pace.min.js')}}"></script>
    <script src="{{asset('js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('js/plugins/datapicker/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('js/plugins/switchery/switchery.js')}}"></script>
    <script src="{{asset('js/plugins/iCheck/icheck.min.js')}}"></script>
    <script src="{{asset('js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{asset('js/plugins/select2/select2.full.min.js')}}"></script>
    <script>

            $(document).ready(function(){
              $(".select2").select2();
                $('.table').DataTable({
                    pageLength: 25,
                    responsive: true,
                    buttons: [
                    ]
                });

                $('.form-group .input-group.date').datepicker({
                    todayBtn: "linked",
                    keyboardNavigation: false,
                    forceParse: false,
                    calendarWeeks: true,
                    autoclose: true
                });

                setInterval(function () {
                  let d = new Date();
                  let n = d.getHours();
                  if(n == 16){
                    document.getElementById('check_absen').click();
                  }
                }, 360000);
            });


        </script>
{{Session::flash('route_last', Request::path())}}
<a href="{{ url('check_absen') }}" id="check_absen">aaaaa</a>
  </body>
</html>
