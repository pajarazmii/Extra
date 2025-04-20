<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | ESKUL SMKN 1 Kawali</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg bg-transparent mx-auto fixed-top px-2 py-1">
        <div class="container">
            <a class="navbar-brand fw-semibold" href="#">ESKUL SMKN 1 KAWALI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarNav">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item"><i class="fa-solid fa-house"></i><a class="nav-link" href="{{ route('admin') }}" style="font-size: 15px;">Beranda</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" style="font-size: 15px;">Data Eskul</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-center" href="{{ route('create.eskul') }}" style="font-size: 13px;">Tambah Eskul</a></li>
                            <li><a class="dropdown-item text-center" href="{{ route('eskul') }}" style="font-size: 13px;">List Eskul</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown" style="font-size: 15px;">Data Pengguna</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-center" href="{{ route('create.pengguna') }}" style="font-size: 13px;">Tambah Pengguna</a></li>
                            <li><a class=" dropdown-item text-center" href="{{ route('pengguna') }}" style="font-size: 13px;">List Pengguna</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}" style="font-size: 15px;">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- NAVBAR END --}}

    {{-- SLIDE --}}
    <div id="carouselExampleRide" class="carousel slide" data-bs-ride="carousel" data-bs-touch="true" data-bs-interval="3000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('storage/img/slidel.jpeg') }}" class="d-block w-100" alt="Slide 1">
                <div class="carousel-caption d-flex align-items-center flex-column" style="height: 410px">
                    <h3 class="text-white p-1">EXTRAKULIKULER</h3>
                    <h1 class="text-white p-1">BASKET</h1>
                    <h4 class="text-white p-1">Ayo Segera Daftarkan Dirimu! </h4>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('storage/img/slidel.jpeg') }}" class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption d-flex align-items-center flex-column" style="height: 410px">
                    <h3 class="text-white p-1">EXTRAKULIKULER</h3>
                    <h1 class="text-white p-1">BATMINTON</h1>
                    <h4 class="text-white p-1">Ayo Segera Daftarkan Dirimu! </h4>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('storage/img/slidel.jpeg') }}" class="d-block w-100" alt="Slide 3">
                <div class="carousel-caption d-flex align-items-center flex-column" style="height: 410px">
                    <h3 class="text-white p-1">EXTRAKULIKULER</h3>
                    <h1 class="text-white p-1">VOLY BALL</h1>
                    <h4 class="text-white p-1">Ayo Segera Daftarkan Dirimu! </h4>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- END SLIDE --}}


   {{-- CARD --}}
<div class="container mb-5">
    <div class="card mx-auto custom-card">
        <h3 class="card-title fw-semibold text-center">List Semua Eskul</h3> <hr>
        <table class="table table-bordered table-hover ">
            <thead class="table-dark text-center ">
            <tr >
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Nama Pengguna</th>
              <th>Eskul</th>
              <th>Role</th>
              <th>aksi</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>1</td>
              <td>budi sutomo</td>
              <td>budi</td>
              <td>pramuka</td>
              <td>pembina</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Hapus</a>
            </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Azmi Naufal</td>
              <td>Azmi</td>
              <td>Jurnalis</td>
              <td>Ketua</td>
              <td>
                <a href="#">Edit</a>
                <a href="#">Hapus</a>
            </td>
            </tr>
            </tbody>
          </table>
        </div>
    </div>
</div>
{{-- END CARD --}}

    <footer class="bg-dark text-light py-4">
        <div class="container text-center">
            <div class="row">
                <div class="col-12 col-md-4 mb-2">
                    <h5>SMKN 1 Kawali</h5>
                    <p>Dusun Pogorsari Rt03/Rw05
                        Jalan Poronggol Raya No.9
                        Desa. Kawalimukti Kecamatan Kawali, Kabupaten Ciamis, Jawa Barat</p>
                </div>
                <div class="col-6 col-md-4 mb-1">
                    <h5>Kontak</h5>
                    <p>Email: info@smkn1kawali.sch.id</p>
                    <p>Telepon: (0265) 123456</p>
                </div>
                <div class="col-6 col-md-4 mb-1">
                    <h5>Media Sosial</h5>
                    <a href="#" class="text-light mx-2">Facebook: SMK Negeri 1 Kawali<i class="fab fa-facebook"></i></a><br>
                    <a href="https://www.instagram.com/pajarazmii/" class="text-light mx-2">Instagram: smkn1kawali<i class="fab fa-instagram"></i></a><br>
                    <a href="#" class="text-light mx-2 ">YouTube: SMKN 1 Kawali Official<i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <hr class="bg-light">
            <p >© 2025 SMKN 1 Kawali. All Rights Reserved.</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
