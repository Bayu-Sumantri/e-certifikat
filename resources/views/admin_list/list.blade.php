@extends('admin.admin_master')
@section('tittle')
    List Admin
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
                                <h4 class="card-title">@yield('tittle')</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                {{-- <th>Action</th> --}}
                                            </tr>
                                        </thead>
                                        @foreach ($User as $row)
                                        <tbody>
                                            <tr>
                                                <td>{{ $loop->iteration + $User->perpage() * ($User->currentPage() - 1) }}</td>
                                                <td>{{ $row->name }}</td>
                                                <td>{{ $row->email }}</td>
                                                {{-- <td>
                                                    <form method="post"
                                                    onsubmit="return confirm('Apakah anda yakin akan menghapus, Data {{ $row->nama }}?..')"
                                                    action="{{ route('Siswa.destroy', $row->id) }}">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <a href="" target="_blank" class="btn btn-info"><i class="fa fa-edit"></i></a>
                                                    <button type="submit" class="btn btn-danger"><i
                                                            class="fa fa-trash"></i></button>
                                                    </form>
                                                </td> --}}
                                            </tr>
                                        </tbody>
                                        @endforeach
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                {{-- <th>Action</th> --}}
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
         <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
         <script>
            function openPDF(id, id_sertifikat) {
                var baseUrl = "{{ url('cetakPDF') }}";
                var url;

                // Check id_sertifikat and set the appropriate route
                if (id_sertifikat == 1) {
                    url = baseUrl + '1/' + id;
                } else if (id_sertifikat == 2) {
                    url = baseUrl + '2/' + id;
                } else if (id_sertifikat == 3) {
                    url = baseUrl + '3/' + id;
                } else {
                    // Handle other cases or show an error message
                    console.error('Invalid id_sertifikat:', id_sertifikat);
                    return;
                }

                // Open the URL in a new tab/window
                window.open(url, '_blank');
            }
        </script>



@endsection
