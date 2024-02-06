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
                                                <td>{{ $row->desk_sertifikat }}</td>
                                                <td>{{ $row->nisn }}</td>
                                                <td>
                                                    <form method="post"
                                                    onsubmit="return confirm('Apakah anda yakin akan menghapus, Data {{ $row->nama }}?..')"
                                                    action="{{ route('Siswa.destroy', $row->id) }}">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <a href="#" onclick="openPDF('{{ $row->id }}', '{{ $row->id_sertifikat }}')" class="btn btn-warning"><i class="fa fa-print"></i></a>
                                                    <button type="submit" class="btn btn-danger"><i
                                                            class="fa fa-trash"></i></button>
                                                    </form>
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
                                                <th>Description Sertifikat</th>
                                                <th>NISN</th>
                                                <th>Action</th>
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
<!-- JavaScript -->
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
        var newWindow = window.open(url, '_blank');

        // // Add event listener to check when the new window is loaded
        // $(newWindow).on('load', function () {
        //     // After the window is loaded, send an AJAX request to download the PDF
        //     $.ajax({
        //         url: url,
        //         method: 'GET',
        //         xhrFields: {
        //             responseType: 'blob'
        //         },
        //         success: function (data) {
        //             console.log(data); // Check the received data in the console
        //             var blob = new Blob([data], { type: 'application/pdf' });

        //             // Create a link element to trigger the download
        //             var link = document.createElement('a');
        //             link.href = window.URL.createObjectURL(blob);
        //             link.download = 'cetak_pdf_' + id + '.pdf';

        //             // Append the link to the document
        //             document.body.appendChild(link);

        //             // Trigger the click event on the link
        //             link.click();

        //             // Remove the link from the document
        //             document.body.removeChild(link);
        //         },
        //         error: function (xhr, status, error) {
        //             console.error('Error downloading PDF:', error);
        //         }
        //     });

        // });
    }
</script>





@endsection
