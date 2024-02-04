        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <li><a class="has-arrow" href="{{ url("javascript:void()") }}" aria-expanded="false"><i
                                class="icon icon-single-04"></i><span class="nav-text">Master  Data</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route("dashboard") }}">Dashboard</a></li>
                            <li><a href="{{ route("Siswa.index") }}">List Siswa</a></li>
                            <li><a href="{{ route("Tema.index") }}">Tema Serrtifikat</a></li>
                            <li><a href="{{ route("Setting.index") }}">Settings</a></li>
                        </ul>
                    </li>
                </ul>
            </div>


        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
