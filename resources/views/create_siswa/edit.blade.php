@extends('admin.admin_master')
@section('tittle')
    Create Siswa
@endsection

@section('admin.index')
    <section class="content">


        <div class="content-body">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
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
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Element</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-tittle">Form Add Murid</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{ route('Siswa.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="nama">Name Siswa</label>
                                            <input type="text" class="form-control input-rounded" id="nama"
                                                name="nama" placeholder="Name Siswa" value="{{ old('nama', $Siswa->nama) }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="tema_pelatihan">Tema Pelatihan</label>
                                            <input type="text" class="form-control input-rounded" id="tema_pelatihan"
                                                name="tema_pelatihan" placeholder="Tema Pelatihan">
                                        </div>
                                        <div class="form-group">
                                            <label for="desk_sertifikat">Desk Sertifikat</label>
                                            <input type="text" class="form-control input-rounded" id="desk_sertifikat"
                                                name="desk_sertifikat" placeholder="Desk Sertifikat" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="nisn">NISN</label>
                                            <input type="number" class="form-control input-rounded" id="nisn"
                                                name="nisn" placeholder="NISN" required>
                                        </div>
                                        <!-- Hapus input no_sertifikat, karena akan diisi secara otomatis -->
                                        <div class="form-group">
                                            <label for="exampleSelect">Pilih Tema</label>
                                            <select class="form-control" id="exampleSelect" name="id_sertifikat" required>
                                                <option value="" disabled selected>Pilih Nama Tema</option>
                                                @foreach ($Sertif as $row)
                                                    <option value="{{ $row->id }}">{{ $row->nama_tema }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleSelect">Pilih Signature</label>
                                            <select class="form-control" id="exampleSelect" name="id_setting" required>
                                                <option value="" disabled selected>Pilih Signature</option>
                                                @foreach ($Setting as $row)
                                                    <option value="{{ $row->id }}">{{ $row->nama_pengajar }} - {{ $row->instansi_pengajar }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </section>
@endsection
