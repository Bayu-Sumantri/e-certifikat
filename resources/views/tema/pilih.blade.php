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
                                <h4 class="card-tittle">Form Pilih Tema</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <div class="row">
                                        @foreach ($Tema as $tema)
                                            <div class="col-xl-4 col-xxl-6 col-lg-6 col-sm-6 mb-3">
                                                <div class="card shadow">
                                                    <img class="card-img-top img-fluid"
                                                        src="{{ \Illuminate\Support\Facades\Storage::url($tema->gambar_tema) }}"
                                                        alt="Card image cap" style="height: 200px;"> <!-- Set a fixed height -->
                                                    <div class="card-header">
                                                        <h5 class="card-title">{{ $tema->nama_tema }}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
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
