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
                        <strong class="font-bold">{{Auth::user()->nama}}</strong>
                      </span>
                      <span class="text-muted text-xs block">
                        @if (Auth::user()->id_role == "1") 
                        BKK
                        @elseif(Auth::user()->id_role == "2")
                        Kepala Program 
                        @elseif(Auth::user()->id_role == "3")
                        Siswa
                        @elseif(Auth::user()->id_role == "4")
                        Pembimbing Rayon
                        @endif
                      </span>
                    </span>
                  </a>
                </div>
                <div class="logo-element">
                    SP
                </div>
            </li>
            @if (Auth::user()->status == 0)
            <li>
                <a href="{{url('persyaratan')}}"><i class="fa fa-check"></i><span class="nav-label">Persyaratan Siswa</span></a>
            </li>
            @if (Auth::user()->id_role == 1)
            <li>
                <a href="{{url('referensi')}}"><i class="fa fa-tags"></i><span class="nav-label">Referensi Siswa</span></a>
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
                <a href="{{url('user')}}"><i class="fa fa-user"></i><span class="nav-label">User</span></a>
            </li>
            <li>
                <a href="{{url('penempatan')}}"><i class="fa fa-map-marker"></i><span class="nav-label">Penempatan</span></a>
            </li>
            @endif
            <li>
                <a href="{{url('siswa')}}"><i class="fa fa-male"></i><span class="nav-label">Siswa</span></a>
            </li>
          @elseif (Auth::user()->status == 3)
            <li>
                <a href="{{url('kehadiran')}}"><i class="fa fa-edit"></i><span class="nav-label">Kehadiran</span><span class="label label-info pull-right">@if (isset($SessionVar[0])){{$SessionVar[0]}}@endif</span></a>
            </li>
            <li>
                <a href="{{url('jurnal')}}"><i class="fa fa-edit"></i><span class="nav-label">Jurnal</span></a>
            </li>
        @endif
        </ul>
    </div>
</nav>
