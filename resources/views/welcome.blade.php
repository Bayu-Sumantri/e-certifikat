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

.search-results ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.search-results li {
    font-size: 16px;
    margin-bottom: 5px;
}

.search-results p {
    font-size: 16px;
    margin-top: 10px;
}
    </style>
</head>
<body>
    <div class="search-container">
        <form action="/" method="POST">
            @csrf
            <input type="text" class="search-input" name="search" placeholder="Search...">
            <button type="submit" class="search-button">Search</button>
        </form>
    </div>

    @if(isset($results))
        <div class="search-results">
            @if(count($results) > 0)
                <h2>Search Results:</h2>
                <ul>
                    @foreach($results as $result)
                        <li>{{ $result->nama }}</li>
                        <!-- Gantilah 'nama_kolom' dengan nama kolom yang ingin ditampilkan -->
                    @endforeach
                </ul>
            @else
                <p>No results found.</p>
            @endif
        </div>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
