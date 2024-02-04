@extends('admin.admin_master')
@section('tittle')
    Data Siswa
@endsection

@section('admin.index')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome in @yield('tittle')!</h4>
                            <span class="ml-1">@yield('tittle')</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ route('Siswa.create') }}" class="btn btn-success"><i class="mdi mdi-plus"></i>Create</a>
                                <h4 class="card-title">@yield('tittle')</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>No Sertifikat</th>
                                                <th>Tema Pelatihan</th>
                                                <th>Juara Lomba</th>
                                                <th>Description Sertifikat</th>
                                                <th>NISN</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        @foreach ($Siswa as $row)
                                        <tbody>
                                            <tr>
                                                <td>{{ $loop->iteration + $Siswa->perpage() * ($Siswa->currentPage() - 1) }}</td>
                                                <td>{{ $row->nama }}</td>
                                                <td>{{ $row->no_sertifikat }}</td>
                                                <td>{{ $row->tema_pelatihan }}</td>
                                                <td>{{ $row->juara_lomba }}</td>
                                                <td>{{ $row->desk_sertifikat }}</td>
                                                <td>{{ $row->nisn }}</td>
                                                <td>
                                                    <form method="post"
                                                    onsubmit="return confirm('Apakah anda yakin akan menghapus, Data {{ $row->nama }}?..')"
                                                    action="{{ route('Siswa.destroy', $row->id) }}">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <a href="" target="_blank" class="btn btn-info"><i class="fa fa-edit"></i></a>
                                                    <button type="submit" class="btn btn-danger"><i
                                                            class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>No Sertifikat</th>
                                                <th>Tema Pelatihan</th>
                                                <th>Juara Lomba</th>
                                                <th>Description Sertifikat</th>
                                                <th>NISN</th>
                                                <th>NISN</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


@endsection
