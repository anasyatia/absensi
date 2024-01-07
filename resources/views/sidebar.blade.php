<nav id="sidebar">
    <ul class="list-unstyled components">
        <li class="active">
            <a href="{{url('admin')}}"><i class="fas fa-th-large"></i> Dashboard</a>
        </li>
        <li>
            <a href="#dataMasterSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
            <i class="fas fa-th-list"></i> Data Master
            </a>
            <ul class="collapse" id="dataMasterSubmenu">
                <li>
                    <a href="{{url('rombel/data')}}">Data Rombel</a>
                </li>
                <li>
                    <a href="{{url('rayon/data')}}">Data Rayon</a>
                </li>
                <li>
                    <a href="{{ url('student/data') }}">Data Siswa</a>
                </li>
                <li>
                    <a href="{{url('user/data')}}">Data User</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{ url('late/data') }}"> <i class="fas fa-chart-bar"></i> Data Keterlambatan</a>
        </li>
    </ul>
</nav>