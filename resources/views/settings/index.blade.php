@extends('admin.admin_master')
@section('tittle')
    Settings
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
                                <h4 class="card-title">Form @yield('tittle')</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <form method="post" action="{{ route('profile.update') }}" method="post">
                                                @method('patch')
                                                @csrf
                                                <div class="form-group">
                                                    <label for="nama">Name CEO Web Sertif</label>
                                                    <input type="text" class="form-control input-rounded" id="nama"
                                                        name="name" placeholder="Name Siswa"
                                                        value="{{ auth()->user()->name }}" required autofocus autocomplete="name">
                                                </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="nama">Email CEO Web Sertif</label>
                                            <input type="text" class="form-control input-rounded" id="nama"
                                                name="email" placeholder="Name Siswa"
                                                value="{{ auth()->user()->email }}">
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-success"><i class="mdi mdi-content-save"></i>Save</button>
                                    </form>


                                    <form action="{{ route('Setting.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row" style="margin-top: 35px">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nama_pengajar">Nama Pengajar</label>
                                                    <input type="text" class="form-control input-rounded"
                                                        id="nama_pengajar" name="nama_pengajar"
                                                        placeholder="Tema Pelatihan">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="desk_sertifikat">Instansi Pengajar</label>
                                                    <input type="text" class="form-control input-rounded"
                                                        id="instansi_pengajar" name="instansi_pengajar"
                                                        placeholder="Desk Sertifikat">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="tema_pelatihan">Tempat Sertifikat</label>
                                                    <input type="text" class="form-control input-rounded"
                                                        id="tempat_sertifikat" name="tempat_sertifikat"
                                                        placeholder="Tema Pelatihan">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="col-xl-3 col-xxl-6 col-md-6">
                                                    <label>Tanggal Sertifikat</label>
                                                    <input type="text" class="form-control" placeholder="2014-06-04"
                                                        id="mdate" name="tgl_sertifikat">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nama_pengajar">Ttd Pemimpin (PNG only)</label>
                                                    <input type="file" class="form-control input-rounded"
                                                        id="nama_pengajar" name="ttd_pemimpin" accept=".png"
                                                        onchange="previewImage('nama_pengajar', 'previewNamaPengajar')">
                                                    <small class="text-muted">Accepted formats: PNG</small>
                                                </div>
                                                <img id="previewNamaPengajar" src="#" alt="Preview"
                                                    style="max-width: 100%; max-height: 400px; display: none;">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="instansi_pengajar">Instansi Pengajar (PNG only)</label>
                                                    <input type="file" class="form-control input-rounded"
                                                        id="instansi_pengajar" name="ttd_pengajar" accept=".png"
                                                        onchange="previewImage('instansi_pengajar', 'previewInstansiPengajar')">
                                                    <small class="text-muted">Accepted formats: PNG</small>
                                                </div>
                                                <img id="previewInstansiPengajar" src="#" alt="Preview"
                                                    style="max-width: 100%; max-height: 400px; display: none;">
                                            </div>
                                        </div>

                                                <button type="submit" class="btn btn-primary mt-3 mdi mdi-content-save-settings">Submit</button>
                                                <!-- Add a cancel button or any other buttons as needed -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        @push('images-view_daterangepicker')
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
            <script>
                function previewImage(inputId, imageId) {
                    var input = document.getElementById(inputId);
                    var image = document.getElementById(imageId);

                    if (input.files && input.files[0]) {
                        var file = input.files[0];
                        var fileType = file.type.toLowerCase();

                        if (fileType !== 'image/png') {
                            alert('Please upload a PNG image.');
                            input.value = ''; // Clear the file input
                            image.style.display = 'none'; // Hide the preview
                            return;
                        }

                        var reader = new FileReader();

                        reader.onload = function(e) {
                            image.src = e.target.result;
                            image.style.display = 'block';
                        };

                        reader.readAsDataURL(file);
                    }
                }
            </script>
        @endpush


    </section>
@endsection
