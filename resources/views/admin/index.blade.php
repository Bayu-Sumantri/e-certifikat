@extends('admin.admin_master')
@section('tittle')
    Dashboard
@endsection

@section('admin.index')
    <section class="content">

        <!--**********************************
                Content body start
            ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Total Siswa </div>
                                    <div class="stat-digit">{{ $totalSiswa }}</div>
                                </div>
                            </div>
                            <a href="{{ route('Siswa.index') }}" class="btn btn-primary">View</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Jenis Tema</div>
                                    <div class="stat-digit">{{ $totaltema }}</div>
                                </div>
                            </div>
                            <a href="{{ route('Tema.index') }}" class="btn btn-primary">View</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="stat-widget-two card-body">
                                <div class="stat-content">
                                    <div class="stat-text">Total Admin</div>
                                    <div class="stat-digit">{{ $totaladmin }}</div>
                                </div>
                            </div>
                            <a href="{{ route('list_admin') }}" class="btn btn-primary">View</a>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>

            </div>
        </div>
        <!--**********************************
                Content body end
            ***********************************-->
    </section>
    @endsection
