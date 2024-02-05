<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Search Bar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        /* CSS */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
        }

        h3 {
            margin-top: -10px;
            font-size: 1.2em;
        }

        .search-container {
            display: flex;
            align-items: center;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 4px;
            overflow: hidden;
            max-width: 400px;
            width: 100%;
            margin: 0 auto;
        }

        .search-input {
            flex: 1;
            border: none;
            padding: 10px;
            font-size: 16px;
            outline: none;
            border-top-left-radius: 4px;
            border-bottom-left-radius: 4px;
        }

        .search-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            transition: background-color 0.3s;
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
        }

        .search-button:hover {
            background-color: #0056b3;
        }

        @media (max-width: 768px) {
            .search-container {
                max-width: 100%;
            }
        }

        .search-results {
            margin-top: 20px;
            text-align: center;
        }

        .search-results h2 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .search-results .card {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .search-results button {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            transition: background-color 0.3s;
            border-radius: 4px;
        }

        .search-results button:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <h3>Dapatkan Sertifikatmu Disini</h3>
    <div class="search-container">
        <form action="/" method="POST">
            @csrf
            <input type="text" class="search-input" name="search" placeholder="Search...">
            <button type="submit" class="search-button">Search</button>
        </form>
    </div>
    <p style="font-size: 12px; margin: 10px">Cari Sertifikat anda di sini</p>

    @if (isset($results))
        <div class="search-results">
            @if (count($results) > 0)
                <h2>Search Results:</h2>
                @foreach ($results as $result)
                    <div class="card">
                        <h4>{{ $result->nama }}</h4>
                        <a href="#"
                            onclick="printAndDownload('{{ $result->id }}', '{{ $result->id_sertifikat }}')"
                            class="btn btn-warning"><i class="fa fa-print"></i> Print Sertifikat</a>
                        <!-- Add the necessary information for the download link -->
                        {{-- <a href="{{ route('downloadPDF', $result->id) }}" class="btn btn-success">Download PDF</a> --}}
                    </div>
                @endforeach
            @else
                <p>No results found.</p>
            @endif
        </div>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- ... (your existing HTML code) ... -->

    <!-- ... (your existing HTML code) ... -->

    <!-- ... (your existing HTML code) ... -->

    <script>
        function printAndDownload(id, id_sertifikat) {
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
                console.error('Invalid id_sertifikat:', id_sertifikat);
                return;
            }

            // Open the URL in a new tab/window
            var newWindow = window.open(url, '_blank');

        }
    </script>

    <!-- ... (your existing HTML code) ... -->



    <!-- ... (your existing HTML code) ... -->

</body>

</html>
