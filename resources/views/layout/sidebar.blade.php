<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                  <span>
                        <img alt="image" class="img-circle" src="{{ asset('img/emptyUser.jpg')}}" style="width:80px;height:80px"/>
                  </span>
                  <a href="">
                      <span class="clear"> <span class="block m-t-xs">
                        <strong class="font-bold">{{Auth::user()->username}}</strong>
                      </span>
                      <span class="text-muted text-xs block">
                        @if (Auth::user()->id_role == "3") Siswa @else User @endif
                      </span>
                    </span>
                  </a>
                </div>
                <div class="logo-element">
                    SP
                </div>
            </li>
            <li>
                <a href="{{url('perusahaan')}}"><i class="fa fa-building-o"></i><span class="nav-label">Perusahaan</span></a>
            </li>
            <li>
                <a href=""><i class="fa fa-envelope-o"></i> <span class="nav-label">Surat</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="suratpermohonan">Surat Permohonan</a></li>
                    <li><a href="suratpengantar">Surat Pengantar</a></li>
                    <li><a href="surattugas">Surat Tugas</a></li>
                    <li><a href="suratbuktikedatangan">Surat Bukti Kedatangan</a></li>
                    <li><a href="suratucapanterimakasih">Surat Ucapan Terimakasih</a></li>
                </ul>
            </li>
            <li>
                <a href="{{url('siswa')}}"><i class="fa fa-male"></i><span class="nav-label">Siswa</span></a>
            </li>
            <li>
                <a href="{{url('user')}}"><i class="fa fa-user"></i><span class="nav-label">User</span></a>
            </li>
            <li>
                <a href="{{url('penempatan')}}"><i class="fa fa-map-marker"></i><span class="nav-label">Penempatan</span></a>
            </li>
            <li>
                <a href="{{url('kehadiran')}}"><i class="fa fa-edit"></i><span class="nav-label">Kehadiran</span>@if(Session::has('status_absen')) {{ Session::get('status_absen') }} @endif</a>
            </li>
            <li>
                <a href="{{url('jurnal')}}"><i class="fa fa-edit"></i><span class="nav-label">Jurnal</span></a>
            </li>
        </ul>
    </div>
</nav>
