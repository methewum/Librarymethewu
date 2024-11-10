<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan UNAIR</title>
    <!-- CSS Bootstrap dan jQuery UI -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #00509E;
            color: white;
            padding: 10px;
            text-align: center;
        }
        nav {
            display: flex;
            justify-content: center;
            background-color: #003A70;
        }
        nav a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
            text-align: center;
        }
        nav a:hover {
            background-color: #00509E;
        }
        .container {
            padding: 20px;
        }
        footer {
            background-color: #00509E;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        #dialog {
            display: none;
        }
        form {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Perpustakaan Universitas Airlangga</h1>
        <p>Selamat datang di perpustakaan suka membaca!</p>
    </header>
    <nav>
        <a href="#beranda">Beranda</a>
        <a href="#katalog">Katalog Buku</a>
        <a href="#pameranBuku">Pameran Buku</a>
        <a href="#formulirAnggota">Formulir Anggota</a>
        <a href="#kontak">Kontak</a>
    </nav>

    <section id="beranda" class="container">
<head>
<body>
    <h1>Perpustakaan Universitas Airlangga</h1>
</body>

<body>
  <h1>Perkenalan</h1>
  <p>
   Perkenalan Saya METHEWU MIKHA dengan Nim 222201015.ini adalah perpustakaan homepage pertama saya ,karena saya baru belajar tentang cara membuat website perpustakaan unair.berikut ini adalah gambar dari Gedung perpustakaan unair
  <p>Untuk lebih lengkapnya website perpustakaan, silakan buka:
            <a href="PERPUSTAKAAN UNAIR.html">website perpustakaan unair</a>
        </p>
</body>
   <a href="#video">PERPUSTAKAAN UNAIR</a> 
<head>
    <title>PERPUSTAKAAN UNAIR</title>
</head>
<body>
    <img src="perpus-depan.jpeg" alt="Logo perpustakaan">
    <p>Perpustakaan UNAIR</p>
</body>
    <head>
    <title>Video Perpustakaan UNAIR</title>
</head>
<body>
  <iframe width="560" height="315" src="https://www.youtube.com/embed/aI94w6gCFzw?si=UCwT2HtAJdlTQdF4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <source src="video.mp4" type="video/mp4">

    </video>
</body>
           
<head>
  <meta charset="UTF-8">
  <title>Contoh Audio di HTML</title>
</head>
<body>
  <h1>Audio</h1>
  <audio controls>
    <source src="town-10169.mp3 " type="audio/mpeg"> Browsermu tidak mendukung tag audio, upgrade donk!
  </audio>
</body>   
    </section>

    <section id="table buku" class="container">
        <h2>table Buku</h2>
        <table id="Table buku" class="display">
            <head>
<body>
<tr>
<td>Family Business : from ABC to MBA edisi 2 </td>
<td>Daud Tjondrorahardja
</td>
<td>Yogyakarta </td>
<td> 2021</td>
<td> 75</td>
<td> 9786236476055</td>

</tr>
<tr>
<d></td>
<td>Maqashid ekonomi syariah : tujuan dan aplikasi
</td>
<td> Moh. Mufid
</td>
<td> Malang : Empatdua Media
</td>
<td>2018</td>
<td>216</td>
<td>9786025192753</td>


</tr>
<tr>
<d></td>
<td>Evaluasi calon mudharib untuk pembiayaan mudharabah</td>
<td> Hendry Herijanto Oejoen Dt. Rajo Hitam</td>
<td>Salemba Empat </td>
<td>2023</td>
<td>310</td>
<td>9786231810427</td>


</tr>

<tr>
<td>Politik ekonomi Indonesia : lanskap dan dinamika kontemporer </td>
<td>Asmiati Abdul Malik </td>
<td>Intrans Publishing </td>
<td>2020 </td>
<td>296 </td>
<td>9786236709030 </td>




</tr>
</tr>
<tr>
<d></td>
<td>Tata kelola sistem inovasi nasional </td>
<td>Prakoso Bhairawa Putera  </td>
<td>LIPI Press </td>
<td>2014</td>
<td>232</td>
<td>9789797997915</td>  </section>

    <section id="formulirAnggota" class="container">
        <h2>Formulir Pendaftaran Anggota Perpustakaan</h2>
        <form id="formAnggota">
            <label for="nama">Nama:</label><br>
            <input type="text" id="nama" name="nama"><br><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email"><br><br>
            <label for="nomorTelp">Nomor Telepon:</label><br>
            <input type="tel" id="nomorTelp" name="nomorTelp"><br><br>
            <button type="submit">Daftar</button>
        </form>
    </section>

    <section id="kontak" class="container">
        <h2>Kontak Kami</h2>
        <p>Alamat: Jalan Kampus UNAIR, Surabaya</p>
        <p>Email: perpustakaan@unair.ac.id</p>
        <p>Telepon: (031) 123-4567</p>
        <button id="btnContact">Buka Dialog Kontak</button>
    </section>

    <div id="dialog" title="Kontak Kami">
        <p>Jika Anda memerlukan bantuan, silakan hubungi kami di alamat dan nomor yang tercantum.</p>
    </div>

    <section id="formulirPemesananBuku" class="container">
        <h2>Formulir Pemesanan Buku</h2>
        <form id="formPemesananBuku">
            <label for="judulBuku">Judul Buku:</label><br>
            <input type="text" id="judulBuku" name="judulBuku"><br><br>
            <label for="namaPeminjam">Nama Peminjam:</label><br>
            <input type="text" id="namaPeminjam" name="namaPeminjam"><br><br>
            <button type="submit">Pesan Buku</button>
        </form>
    </section>

    <section id="formulirPerpanjangan" class="container">
        <h2>Formulir Perpanjangan Peminjaman Buku</h2>
        <form id="formPerpanjangan">
            <label for="judulBukuPerpanjangan">Judul Buku:</label><br>
            <input type="text" id="judulBukuPerpanjangan" name="judulBukuPerpanjangan"><br><br>
            <label for="namaPeminjamPerpanjangan">Nama Peminjam:</label><br>
            <input type="text" id="namaPeminjamPerpanjangan" name="namaPeminjamPerpanjangan"><br><br>
            <button type="submit">Perpanjang</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Perpustakaan Universitas Airlangga</p>
    </footer>

    <!-- jQuery dan Plugin jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script>
        $(document).ready(function() {
            // Inisialisasi DataTables
            $('#katalogTable').DataTable();

            // Membuat dialog jQuery UI untuk kontak
            $("#dialog").dialog({
                autoOpen: false,
                modal: true,
                buttons: {
                    "Tutup": function() {
                        $(this).dialog("close");
                    }
                }
            });

            // Membuka dialog ketika tombol diklik
            $("#btnContact").click(function() {
                $("#dialog").dialog("open");
            });
        });
    </script>
</body>
</html>
