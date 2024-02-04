@extends('admin.admin_master')
@section('tittle')
    Tema
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
                                <h4 class="card-tittle">Form Tema</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{ route('Tema.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="nama">Name Tema</label>
                                            <input type="text" class="form-control input-rounded" id="nama" name="nama_tema" placeholder="Name Siswa">
                                        </div>
                                        <div class="form-group">
                                            <label for="gambar tema">Gambar Tema</label>
                                            <input type="file" class="form-control input-rounded" id="gambar_tema" name="gambar_tema" accept=".png" onchange="previewImage('gambar_tema', 'previewInstansiPengajar')">
                                            <img id="previewInstansiPengajar" src="#" alt="Preview"
                                                    style="max-width: 100%; max-height: 400px; display: none;">
                                        </div>
                                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
            </div>
        </div>


    </section>
@endsection
