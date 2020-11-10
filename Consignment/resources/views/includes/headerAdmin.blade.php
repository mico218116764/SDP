<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="{{url('/admin')}}">Pengajuan</a></li>
                <li><a href="{{url('/detailpengajuan')}}">Detail Pengajuan</a></li>
                <li><a href="{{url('/daftaradmin')}}">Daftar Admin</a></li>
                <li><a href="{{url('/daftarbank')}}">Daftar Bank</a></li>
                <li><a href="{{url('/daftarretur')}}">Daftar Retur</a></li>
                <li><a href="{{url('/daftarjenis')}}">Daftar Jenis</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/doLogout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
