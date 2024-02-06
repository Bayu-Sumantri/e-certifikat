
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="0;url=javascript:window.print()">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap"> --}}
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Italianno&display=swap"> --}}
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&display=swap"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style type='text/css'>
body, html {
    margin: 0;
    padding: 0;
    height: 100%;
}

body {
    color: black;
    font-family: Georgia, serif;
    font-size: 24px;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    background-color: #f5f5f5; /* Warna latar belakang */
}

.container {
    border: 20px solid #d2b48c; /* Warna border seperti warna kertas */
    background-size: cover;
    width: 750px;
    height: 563px;
    position: relative;
    box-sizing: border-box;
    border-radius: 20px; /* Sudut border */
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.3); /* Efek shadow */
    margin: 0 auto; /* Tengahkan container */
}

.logo {
    font-family: 'The Youngest', cursive;
    font-size: 16px;
}

.marquee {
    font-family: 'Italianno', cursive;
    margin: 20px;
    font-size: 60px;
}

.assignment {
    font-family: 'Montserrat Alternates', sans-serif;
}

.person {
    font-family: 'Alata', sans-serif;
    border-bottom: 2px solid #d2b48c; /* Warna border */
    font-size: 32px;
    font-style: italic;
    margin: 20px auto;
    width: 200px;
}

.signature-left,
.signature-right {
    position: absolute;
    bottom: 20px;
}

.signature-left {
    left: 40px;
}

.signature-right {
    right: 40px;
}

.signature img {
    width: 120px;
    height: auto;
    border-radius: 50%; /* Untuk memberikan bentuk lingkaran pada gambar */
}

.signature p {
    margin-top: 10px;
    font-size: 18px;
    color: #d2b48c; /* Warna teks */
}

.reason {
    margin: 20px;
    color: #d2b48c;
}

@media (max-width: 768px) {
    .container {
        width: 90%;
        height: auto; /* Tinggi otomatis sesuai kontennya */
    }

    .marquee {
        font-size: 40px; /* Sesuaikan ukuran font pada layar kecil */
    }
}
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="left">
                <div class="certificate-number">
                    No. Sertifikat: {{ $Siswa->no_sertifikat }}
                </div>
            </div>
            <div class="right">
                <div class="certificate-number">
                    {{ now()->format('d F Y') }}
                </div>
                <div class="certificate-number">
                    {{ $Siswa->tempat }}
                </div>
            </div>
        </div>

        <div class="marquee">
            Sertifikat
        </div>

        <div class="logo">
            penghargaan
        </div>

        <div class="assignment">
            Diberikan kepada :
        </div>

        <div class="person">
            {{ $Siswa->nama }}
        </div>

        <div class="logo">
            {{ $Siswa->tema_pelatihan }}
        </div>

        <div class="reason">
            {{ $Siswa->desk_sertifikat }}
        </div>

        <div class="signature signature-left">
            <img src="{{ asset('storage/' . $Siswa->setting->ttd_pengajar) }}" alt="{{ $Siswa->setting->ttd_pengajar }}" alt="Left Signature">
            <p>{{ $Siswa->setting->nama_pengajar }}</p>
        </div>

        <div class="signature signature-right">
            <img src="{{ asset('storage/' . $Siswa->setting->ttd_pemimpin) }}" alt="{{ $Siswa->setting->ttd_pemimpin }}" alt="Right Signature">
            <p>{{ $Siswa->setting->instansi_pengajar }}</p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Wait for the document to be fully loaded
        document.addEventListener('DOMContentLoaded', function () {
            // Trigger the print dialog
            window.print();
        });
    </script>
</body>

</html>
